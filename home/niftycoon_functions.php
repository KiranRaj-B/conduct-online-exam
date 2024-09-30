<?php
// Function to insert data
// parameters ::

// $tableName : Name of the table

// $columnsData : Array of column name and data
// Ex:    $columnsData = array
              // (
              // 'col-1' => $col-1-data,
              // 'col-2' => $col-2-data,
              // Add more columns and data as needed
              // );

// $mysqli : db connection

// return : $NT_IN_QUERY (status)

function NifTycoon_Insert_Data($tableName, $columnsData, $mysqli)
{

    // Construct placeholders for values
    $placeholders = rtrim(str_repeat('?, ', count($columnsData)), ', ');

    // Construct SQL statement
    $NT_IN = "INSERT INTO `$tableName` (`" . implode('`, `', array_keys($columnsData)) . "`) VALUES ($placeholders)";

    // Prepare the SQL statement
    $NT_IN_QUERY = $mysqli->prepare($NT_IN);

    // Check if the statement was prepared successfully
    if (!$NT_IN_QUERY)
    {
        die("Failed to prepare statement: " . $mysqli->error);
    }

    // Bind parameters dynamically
    $types = '';
    $bindParams = array();

    foreach ($columnsData as $key => $value)
    {
        $types .= 's'; // Assuming all values are strings
        $bindParams[] = &$columnsData[$key]; // Get reference of variable
    }

    array_unshift($bindParams, $types); // Add types as first element
    call_user_func_array(array($NT_IN_QUERY, 'bind_param'), $bindParams);

    // Execute the statement
    $NT_IN_QUERY->execute();

    // Check for errors
    if ($NT_IN_QUERY->errno)
    {
        echo "Error: " . $NT_IN_QUERY->error;
        // Handle error as needed
    }

    // Close the statement
    $NT_IN_QUERY->close();

    return $NT_IN_QUERY;
}


// Function to update data
// parameters ::

// $tableName : Name of the table

// $setColumnsData : Array of column name and data
// Ex:    $columnsData = array
              // (
              // 'col-1' => $col-1-data,
              // 'col-2' => $col-2-data,
              // Add more columns and data as needed
              // );

// $whereColumnsData : where condition for updare
// Ex :     $whereColumnsData = "col_name = 'data' AND col_name = 'data' OR ETC..";

// $mysqli : db connection
//
// return : $NT_UP_QUERY (status)

function NifTycoon_Update_Data($tableName, $setColumnsData, $whereColumnsData, $mysqli)
{
    // Construct SET clause
    $setClause = implode('=?, ', array_keys($setColumnsData)) . '=?';

    // Prepare SQL statement
    $NT_UP = "UPDATE `$tableName` SET $setClause WHERE $whereColumnsData";
    $NT_UP_QUERY = $mysqli->prepare($NT_UP);

    // Check if the statement was prepared successfully
    if (!$NT_UP_QUERY)
    {
        die("Failed to prepare statement: " . $mysqli->error);
    }

    // Bind parameters dynamically
    $types = '';
    $bindParams = array();

    foreach ($setColumnsData as $key => $value)
    {
        $types .= 's'; // Assuming all values are strings
        $bindParams[] = &$setColumnsData[$key]; // Get reference of variable
    }

    array_unshift($bindParams, $types); // Add types as first element
    call_user_func_array(array($NT_UP_QUERY, 'bind_param'), $bindParams);

    // Execute the statement
    $NT_UP_QUERY->execute();

    // Check for errors
    if ($NT_UP_QUERY->errno)
    {
        throw new Exception("Error executing statement: " . $NT_UP_QUERY->error);
    }

    return $NT_UP_QUERY;

}


// Function to update data
// parameters ::

// $tableName : Name of the table

// $whereColumnsData : where condition for delete
// Ex :     $whereColumnsData = "col_name = 'data' AND col_name = 'data' OR ETC..";

// $mysqli : db connection
//
// Return : $NT_DL_QUERY (status)

function NifTycoon_Delete_Data($tableName, $whereColumnsData, $mysqli)
{

    // Prepare SQL statement
    $NT_DL = "DELETE FROM `$tableName` WHERE $whereColumnsData";
    $NT_DL_QUERY = $mysqli->prepare($NT_DL);

    // Check if the statement was prepared successfully
    if (!$NT_DL_QUERY)
    {
        die("Failed to prepare statement: " . $mysqli->error);
    }

    // Execute the statement
    $NT_DL_QUERY->execute();

    // Check for errors
    if ($NT_DL_QUERY->errno)
    {
        die("Error executing statement: " . $NT_DL_QUERY->error);
    }

    return $NT_DL_QUERY;
}


// Function to select data
// parameters ::

// $tableName : Name of the table

// $whereColumnsData : where condition for delete
// Ex :     $whereColumnsData = "col_name = 'data' AND col_name = 'data' OR ETC..";

// $group_by : group by data (if nothing pass '')

// $orderby : column name to order (used with $orderByColumn)

// $orderByColumn : desc or asc (by default asc will be applied)

// $limit : limit of data to be fetched (pass 0 if no limit to apply)

// $mysqli : db connection
//
// Return:  $Result_Select : fetched data array
// Ex:      $resultSet = NifTycoon_Select_Data('test_details',$columnsData,$conn);
              // if multiple rows fetch:
              // foreach ($resultSet as $result)
              //  {
              //      echo $result['col_name'];
              //  }

              // if only one row fetch:
              // elseif(is_array($result)){
              // echo $result['col_name'][0];
              // }

function NifTycoon_Select_Data($tableName, $whereColumnsData, $group_by, $orderby= null, $orderByColumn = null, $limit = null, $mysqli)
{

    // Construct SQL statement
    $NT_SEL = "SELECT * FROM `$tableName` WHERE $whereColumnsData ";

    // Add GROUP BY clause if specified
    if ($group_by != '') {
      $NT_SEL .= " GROUP BY $group_by";
    }

    // Add ORDER BY clause if specified
    if ($orderByColumn && $orderby)
    {
        $NT_SEL .= " ORDER BY $orderby $orderByColumn";
    }

    // Add LIMIT clause if specified
    if ($limit >= 1)
    {
        $NT_SEL .= " LIMIT $limit";
    }

    $NT_SEL_QUERY = $mysqli->prepare($NT_SEL);

    // Check if the statement was prepared successfully
    if (!$NT_SEL_QUERY)
    {
        die("Failed to prepare statement: " . $mysqli->error);
    }

    // Bind result variables
    $result = array();
    $meta = $NT_SEL_QUERY->result_metadata();
    while ($field = $meta->fetch_field())
    {
        $result[$field->name] = null;
        $bindParams[] = &$result[$field->name];
    }
    call_user_func_array(array($NT_SEL_QUERY, 'bind_result'), $bindParams);

    // Execute the statement
    $NT_SEL_QUERY->execute();

    // Fetch the results


    if ($NT_SEL_QUERY->num_rows == 1)
    {
    $Result_Select =  $NT_SEL_QUERY->fetch();
    }
    else
    {
     $Result_Select = array();
     // Fetch all rows if there are multiple rows
     while ($NT_SEL_QUERY->fetch())
     {

        $row = array();
        foreach ($result as $key => $value)
        {
            $row[$key] = $value;
        }
        $Result_Select[] = $row;
     }
    }

    // Close the statement
    $NT_SEL_QUERY->close();

    return $Result_Select;
}


// Function to select data for Other conditions
// parameters ::

// $fullQuery : Query need to be execute

// $mysqli : db connection
//
// Return:  $Result_Select : fetched data array
// Ex:      $resultSet = NifTycoon_Select_OtherCondition($Query,$conn);
              // if multiple rows fetch:
              // foreach ($resultSet as $result)
              //  {
              //      echo $result['col_name'];
              //  }

              // if only one row fetch:
              // elseif(is_array($result)){
              // echo $result['col_name'][0];
              // }

function NifTycoon_Select_OtherCondition($fullQuery, $mysqli)
{
    $NT_SEL_QUERY_OTH = $mysqli->prepare($fullQuery);

    // Check if the statement was prepared successfully
    if (!$NT_SEL_QUERY_OTH)
    {
        die("Failed to prepare statement: " . $mysqli->error);
    }

    // Bind result variables
    $result = array();
    $meta = $NT_SEL_QUERY_OTH->result_metadata();
    while ($field = $meta->fetch_field())
    {
        $result[$field->name] = null;
        $bindParams[] = &$result[$field->name];
    }
    call_user_func_array(array($NT_SEL_QUERY_OTH, 'bind_result'), $bindParams);

    // Execute the statement
    $NT_SEL_QUERY_OTH->execute();

    // Fetch the results


    if ($NT_SEL_QUERY_OTH->num_rows == 1)
    {
    $Result_Select =  $NT_SEL_QUERY_OTH->fetch();
    }
    else
    {
      $Result_Select = array();
     // Fetch all rows if there are multiple rows
     while ($NT_SEL_QUERY_OTH->fetch())
     {

        $row = array();
        foreach ($result as $key => $value)
        {
            $row[$key] = $value;
        }
        $Result_Select[] = $row;
     }
    }

    // Close the statement
    $NT_SEL_QUERY_OTH->close();

    return $Result_Select;
}

// Function to insert data within Array
// parameters ::

// $tableName : Name of the table

// $columnsData : Array of column name and data
// Ex:        The function should called number of times the data repeats ie count($main_var)
              // $col-1-data_arraydata = count($col-1-data); here we assume $col-1-data as main variable which has max count of array
              // We have to reassign data within for loop (before : $example_var_arraydata After : $example_var)
              // for ($i = 0; $i < $$col-1-data_arraydata; $i++) {
              // $col-1-data = $col-1-data_arraydata;
              // $col-2-data = $col-1-data_arraydata[$i];

              // $columnsData = array
              // (
              // 'col-1' => $col-1-data,
              // 'col-2' => $col-2-data,
              // Add more columns and data as needed
              // );

// $mysqli : db connection

// return : $NT_IN_QUERY (status)

function NifTycoon_Insert_Array_Data($tableName, $columnsData, $mysqli)
{
  // Extract keys and values from the data array
  $columns = array_keys($columnsData);
  $placeholders = rtrim(str_repeat('?, ', count($columnsData)), ', ');

  // Construct SQL statement
  $NT_INARRAY = "INSERT INTO `$tableName` (`" . implode('`, `', $columns) . "`) VALUES ($placeholders)";

  // Prepare SQL statement
  $NT_INARRAY_QUERY = $mysqli->prepare($NT_INARRAY);

  // Check if the statement was prepared successfully
  if (!$NT_INARRAY_QUERY) {
      die("Failed to prepare statement: " . $mysqli->error);
  }

  // Bind parameters dynamically
  $types = str_repeat('s', count($columnsData)); // Assuming all values are strings
  $bindParams = array($types);
  foreach ($columnsData as &$value) { // Pass each parameter as reference
      $bindParams[] = &$value;
  }
  call_user_func_array(array($NT_INARRAY_QUERY, 'bind_param'), $bindParams);

  // Execute the statement
  $NT_INARRAY_QUERY->execute();

  // Check for errors
  if ($NT_INARRAY_QUERY->errno) {
      die("Error executing statement: " . $stmt->error);
  }

  // Close the statement
  $NT_INARRAY_QUERY->close();

  return $NT_INARRAY_QUERY;
}


// Function to get max number in column where condition
// parameters ::

// $tableName : Name of the table

// $col_name : Name of column

// $whereColumnsData : where condition for get max number
// Ex :     $whereColumnsData = "col_name = 'data' AND col_name = 'data' OR ETC..";

// $mysqli : db connection

// return : $maxNum (max num)

function NifTycoon_Get_Max_Num($tableName, $col_name, $whereColumnsData, $mysqli)
{

    // Construct SQL statement
    $NT_MAX_NUM = "SELECT MAX($col_name) AS max_value FROM `$tableName` WHERE $whereColumnsData";

    $NT_MAX_NUM_QUERY = $mysqli->prepare($NT_MAX_NUM);

    // Check if the statement was prepared successfully
    if (!$NT_MAX_NUM_QUERY)
    {
        die("Failed to prepare statement: " . $mysqli->error);
    }

    // Execute the statement
    $NT_MAX_NUM_QUERY->execute();

    $NT_MAX_NUM_QUERY->bind_result($maxNum);

   // Fetch the result
   $NT_MAX_NUM_QUERY->fetch();

   // Close the statement
   $NT_MAX_NUM_QUERY->close();

   // Return the maximum count of id
   return $maxNum;

}


// Function to get count in table by where condition
// parameters ::

// $tableName : Name of the table

// $whereColumnsData : where condition for get max number
// Ex :     $whereColumnsData = "col_name = 'data' AND col_name = 'data' OR ETC..";

// $mysqli : db connection

// return : $count (num rows)

function NifTycoon_Get_Count($tableName, $whereColumnsData, $mysqli)
{

    // Construct SQL statement
    $NT_COUNT = "SELECT COUNT(*) AS row_count FROM `$tableName` WHERE $whereColumnsData";

    $NT_COUNT_QUERY = $mysqli->prepare($NT_COUNT);

    // Check if the statement was prepared successfully
    if (!$NT_COUNT_QUERY)
    {
        die("Failed to prepare statement: " . $mysqli->error);
    }

    // Execute the statement
    $NT_COUNT_QUERY->execute();

    $NT_COUNT_QUERY->bind_result($count);

   // Fetch the result
   $NT_COUNT_QUERY->fetch();

   // Close the statement
   $NT_COUNT_QUERY->close();

   // Return the maximum count of id
   return $count;

}


// Function to enctype data
function encryptData($data, $key) {
    $iv = "1002301331032001";
    $encryptedData = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
    return base64_encode($encryptedData);
}

// Function to decrypt data
function decryptData($encryptedData, $key) {
    $iv = "1002301331032001";
    $decodedData = base64_decode($encryptedData);
    return openssl_decrypt($decodedData, 'aes-256-cbc', $key, 0, $iv);
}
  ?>
