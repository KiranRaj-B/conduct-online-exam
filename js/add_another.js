document.addEventListener("DOMContentLoaded", function() {
const addBtn = document.getElementById("add-btn");
const container = document.getElementById("input-container");
let serialNumber = 1;
  var srl_id =1;
//function on click starts here
addBtn.addEventListener("click", function() {
serialNumber++;
srl_id ++;

const inputGroup = document.createElement("div");
inputGroup.className = "input-group";
inputGroup.innerHTML = `
<div class="row fill justify-content-evenly">
  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="input-group mb-3 input-group-sm">
     <span class="input-group-text">Question No.</span>
     <input class="form-control non_access"  type="number" name="serial_number[]" value="${serialNumber}" placeholder="Auto Generate" required readonly>
    </div>
  </div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-6 mt-2">
    <div class="input-group mb-3 input-group-sm">
     <span class="input-group-text">Question Text</span>
     <textarea class="form-control"  placeholder="Enter Question." name="q_text[]" rows="1"></textarea> &nbsp&nbspOR
    </div>
  </div>
  <!-- <h6>OR</h6> -->
  <div class="col-12 col-sm-12 col-md-12 col-lg-6 mt-2">
    <div class="input-group mb-3 input-group-sm">
     <span class="input-group-text">Question Image</span>
     <input class="form-control"  type="file" name="q_image[]" accept=".jpg, .png" >
    </div>
  </div>
  <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-2">
    <div class="input-group mb-3 input-group-sm">
     <span class="input-group-text">Choice 1</span>
     <textarea class="form-control"  placeholder="Enter Choice 1." name="choice_1[]" rows="1"></textarea>
    </div>
  </div>
  <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-2">
    <div class="input-group mb-3 input-group-sm">
     <span class="input-group-text">Choice 2</span>
     <textarea class="form-control"  placeholder="Enter Choice 2." name="choice_2[]" rows="1"></textarea>
    </div>
  </div>
  <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-2">
    <div class="input-group mb-3 input-group-sm">
     <span class="input-group-text">Choice 3</span>
     <textarea class="form-control"  placeholder="Enter Choice 3." name="choice_3[]" rows="1"></textarea>
    </div>
  </div>
  <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-2">
    <div class="input-group mb-3 input-group-sm">
     <span class="input-group-text">Choice 4</span>
     <textarea class="form-control"  placeholder="Enter Choice 4." name="choice_4[]" rows="1"></textarea>
    </div>
  </div>
  <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
    <div class="input-group mb-3 input-group-sm">
     <span class="input-group-text">Correct Ans.</span>
     <input class="form-control"  placeholder="Enter Correct Answer." type="text" name="correct_ans[]" required>
     </div>
  </div>
  <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
    <div class="input-group mb-3 input-group-sm">
     <span class="input-group-text">Correct Ans. No.</span>
     <select class="form-select" name="correct_ans_no[]">
       <option disabled selected>Select Correct Answer Number</option>
       <option value="choice_1">Choice 1</option>
       <option value="choice_2">Choice 2</option>
       <option value="choice_3">Choice 3</option>
       <option value="choice_4">Choice 4</option>
     </select>
     </div>
  </div>
 <hr class="mt-2">
</div>
<button class="remove-btn btn btn-secondary  mb-2" onclick="" type="button" title="Remove Above Question.." id="remove_above_question" name="button" style="width: 40px;"> <i class="fa fa-times"></i> </button>
`;
// function to remove the apm
container.appendChild(inputGroup);
const removeBtns = document.getElementsByClassName("remove-btn");
for (let i = 0; i < removeBtns.length; i++) {
    removeBtns[i].addEventListener("click", function() {
        this.parentNode.remove();
        renumberSerialNumbers();
        serialNumber--;
        srl_id --;
    });
 }
});
// function to add the apm
function renumberSerialNumbers() {
   const serialNumberInputs = document.querySelectorAll('.input-group input[name="serial_number[]"]');
   serialNumber = 1;
   serialNumberInputs.forEach((input, index) => {
     input.value = serialNumber;
     serialNumber++;
     srl_id++;
     });
   }
});



function confirmsave()
{
 return confirm("Are you sure want save Test");
 }
