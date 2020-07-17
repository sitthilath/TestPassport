@extends('layouts.dashboardstructure')

@section('title','Table')

@section('content')


        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>ເພີ່ມພະນັກງານ</h4>
                  </div>
                  <div class="card-body">
                   <form action="{{url('/form.insert')}}" method="POST">
                        {{csrf_field()}}

                        <div class="form-row">
                            <div class="col">
                            <label for="budget_company" class="col-black">Budget Company</label>
                            <input type="text" class="form-control" name="budget_company" placeholder="ກະລຸນາປ້ອນ Budget Company">
                            </div>
                            <div class="col">
                            <label for="previous" class="col-black">Previous</label>
                            <input type="text"  class="form-control" name="previous" placeholder="ກະລຸນາປ້ອນ Previous">
                            </div>
                            <div class="col">
                            <label for="status" class="col-black">Status</label>
                            <input type="text"  class="form-control" name="status" placeholder="ກະລຸນາປ້ອນ status">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                            <label for="card_num_emp" class="col-black">ເລກບັດພະນັກງານ</label>
                            <input type="text" class="form-control" name="card_num_emp" placeholder="ກະລຸນາປ້ອນ ເລກບັດພະນັກງານ">
                            </div>
                            <div class="col">
                            <label for="name_surname" class="col-black">ຊື່ ແລະນາມສະກຸນ</label>
                            <input type="text"  class="form-control" name="name_surname" placeholder="ກະລຸນາປ້ອນ ຊື່ແລະນາມສະກຸນ">
                            </div>
                            <div class="col">
                            <label for="position" class="col-black">ຕຳແໜ່ງ</label>
                            <input type="text"  class="form-control" name="position" placeholder="ກະລຸນາປ້ອນ ຕຳແໜ່ງ">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="col">
                            <label for="start_date" class="col-black">Start Date</label>
                            <input type="date" class="form-control" name="start_date" >
                            </div>
                            <div class="col">
                            <label for="level_emp" class="col-black">ຂັ້ນພະນັກງານ</label>
                            <input type="text"  class="form-control" name="level_emp" placeholder="ກະລຸນາປ້ອນ ຂັ້ນພະນັກງານ">
                            </div>
                            <div class="col">
                            <label for="report_to" class="col-black">ລາຍງານຫາ</label>
                            <input type="text"  class="form-control" name="report_to" placeholder="ກະລຸນາປ້ອນ ລາຍງານຫາ">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                            <label for="line_report" class="col-black">Line Report</label>
                            <input type="text" class="form-control" name="line_report" placeholder="ກະລຸນາປ້ອນ Line Report">
                            </div>
                            <div class="col">
                            <label for="institution" class="col-black">ໜ່ວຍງານ</label>
                            <input type="text"  class="form-control" name="institution" placeholder="ກະລຸນາປ້ອນ ໜ່ວຍງານ">
                            </div>
                            <div class="col">
                            <label for="department" class="col-black">ພະແນກ</label>
                            <input type="text"  class="form-control" name="department" placeholder="ກະລຸນາປ້ອນ ພະແນກ">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="col">
                            <label for="stationed" class="col-black">ບ່ອນປະຈຳການ</label>
                            <input type="text" class="form-control" name="stationed" placeholder="ກະລຸນາປ້ອນ ບ່ອນປະຈຳການ">
                            </div>
                            <div class="col">
                            <label for="area" class="col-black">ເຂດ</label>
                            <input type="text"  class="form-control" name="area" placeholder="ກະລຸນາປ້ອນ ເຂດ">
                            </div>
                            <div class="col">
                            <label for="date_of_birth">ວ/ດ/ປ ເກີດ</label>
                            <input type="date" class="form-control" name="date_of_birth">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                            <label for="village" class="col-black">ບ້ານ</label>
                            <input type="text" name="village" class="form-control " placeholder="ກະລຸນາປ້ອນ ບ້ານ">
                            </div>
                            <div class="col">
                            <label for="city" class="col-black">ເມືອງ</label>
                            <input type="text" class="form-control" name="city" placeholder="ກະລຸນາປ້ອນ ເມືອງ">
                            </div>
                            <div class="col">
                            <label for="province" class="col-black">ແຂວງ</label>
                            <input type="text" class="form-control" name="province" placeholder="ກະລຸນາປ້ອນ ແຂວງ">
                            </div>
                        </div>

                       
                        <div class="form-row">
                            <div class="col">
                            <label for="tel">ເບີໂທຕິດຕໍ່</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                 <div class="input-group-text">
                                 <i class="fas fa-phone"></i>
                                 </div>
                                 </div>
                            <input type="text" onkeypress="return isNumber(event)" name="tel" class="form-control" placeholder="ກະລຸນາປ້ອນ ເບີໂທຕິດຕໍ່"> 
                            </div>
                            </div>
                            <div class="col">
                            <label for="history_working" class="col-black">ປະຫວັດການເຮັດວຽກ</label>
                            <input type="text" class="form-control" name="history_working" placeholder="ກະລຸນາປ້ອນ ປະຫວັດການເຮັດວຽກ">
                            </div>
                            <div class="col">
                            <label for="edu_background" class="col-black">ວຸດທິການສືກສາ</label>
                            <input type="text" class="form-control" name="edu_background" placeholder="ກະລຸນາປ້ອນ ວຸດທິການສືກສາ">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                            <label for="company_guarantee"  class="col-black">ໃບຄໍ້າປະກັນບໍລິສັດ</label>
                            <input type="text" name="company_guarantee" class="form-control " placeholder="ກະລຸນາປ້ອນ ໃບຄໍ້າປະກັນບໍລິສັດ">
                            </div>
                            <div class="col">
                            <label for="census" class="col-black">ສຳມະໂນຄົວ</label>
                            <input type="text" class="form-control" name="census" placeholder="ກະລຸນາປ້ອນ ສຳມະໂນຄົວ">
                            </div>
                            <div class="col">
                            <label for="penalty_notification" class="col-black">ໃບແຈ້ງໂທດ</label>
                            <input type="text" class="form-control" name="penalty_notification" placeholder="ກະລຸນາປ້ອນ ໃບແຈ້ງໂທດ">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="col">
                            <label for="certificate_residence"  class="col-black">ໃບຢັ້ງຢືນທີ່ຢູ່</label>
                            <input type="text" name="certificate_residence" class="form-control " placeholder="ກະລຸນາປ້ອນ ໃບຢັ້ງຢືນທີ່ຢູ່">
                            </div>
                            <div class="col">
                            <label for="certificate_medical_checkup" class="col-black">ໃບກວດສຸຂະພາບ</label>
                            <input type="text" class="form-control" name="certificate_medical_checkup" placeholder="ກະລຸນາປ້ອນ ໃບກວດສຸຂະພາບ">
                            </div>
                           
                        </div>

                        <div class="form-row">
                            <div class="col">
                            <label for="quick_contact_information"  class="col-black">ຂໍ້ມູນຕິດຕໍ່ສຸກເສີນ</label>
                            <input type="text" name="quick_contact_information" class="form-control " placeholder="ກະລຸນາປ້ອນ ຂໍ້ມູນຕິດຕໍ່ສຸກເສີນ">
                            </div>
                            <div class="col">
                            <label for="basic_salary" class="col-black">ເງິນເດືອນພື້ນຖານ</label>
                            <input type="text" class="form-control" name="basic_salary" placeholder="ກະລຸນາປ້ອນ ເງິນເດືອນພື້ນຖານ">
                            </div>
                            <div class="col">
                            <label for="eating_rate" class="col-black">ອັດຕາກິນ</label>
                            <input type="text" class="form-control" name="eating_rate" placeholder="ກະລຸນາປ້ອນ ອັດຕາກິນ">
                            </div>
                        </div>
                       
                        <div class="form-row">
                            <div class="col">
                            <label for="bonus"  class="col-black">ໂບນັດ</label>
                            <input type="text" name="bonus" class="form-control " placeholder="ກະລຸນາປ້ອນ ໂບນັດ">
                            </div>
                            <div class="col">
                            <label for="phone_value" class="col-black">ມູນຄ່າໂທລະສັບ</label>
                            <input type="text" class="form-control" name="phone_value" placeholder="ກະລຸນາປ້ອນ ມູນຄ່າໂທລະສັບ">
                            </div>
                            <div class="col">
                            <label for="annual_holiday" class="col-black">ມື້ພັກປະຈຳປີ</label>
                            <input type="text" class="form-control" name="annual_holiday" placeholder="ກະລຸນາປ້ອນ ມື້ພັກປະຈຳປີ">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="col">
                            <label for="appraisal_salary"  class="col-black">ເງິນເດືອນຜ່ານການປະເມີນ</label>
                            <input type="text" name="appraisal_salary" class="form-control " placeholder="ກະລຸນາປ້ອນ ເງິນເດືອນຜ່ານການປະເມີນ">
                            </div>
                            <div class="col">
                            <label for="petrol_cost" class="col-black">ຄ່ານ້ຳມັນລົດ</label>
                            <input type="text" class="form-control" name="petrol_cost" placeholder="ກະລຸນາປ້ອນ ຄ່ານ້ຳມັນລົດ">
                            </div>
                            <div class="col">
                            <label for="depreciation" class="col-black">ຄ່າຫລຸ້ຍຫ້ຽນ</label>
                            <input type="text" class="form-control" name="depreciation" placeholder="ກະລຸນາປ້ອນ ຄ່າຫລຸ້ຍຫ້ຽນ">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                            <label for="diligent_money"  class="col-black">ເງິນຂະຫຍັນ</label>
                            <input type="text" name="diligent_money" class="form-control " placeholder="ກະລຸນາປ້ອນ ເງິນຂະຫຍັນ">
                            </div>
                            <div class="col">
                            <label for="accommodation_fee" class="col-black">ຄ່າທີ່ພັກ</label>
                            <input type="text" class="form-control" name="accommodation_fee" placeholder="ກະລຸນາປ້ອນ ຄ່າທີ່ພັກ">
                            </div>
                            <div class="col">
                            <label for="probation" class="col-black">Probation</label>
                            <input type="text" class="form-control" name="probation" placeholder="ກະລຸນາປ້ອນ Probation">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col">
                            <label for="account_num"  class="col-black">ເລກບັນຊີ</label>
                            <input type="text" name="account_num" class="form-control " placeholder="ກະລຸນາປ້ອນ ເງິນຂະຫຍັນ">
                            </div>
                            <div class="col">
                            <label for="annotation" class="col-black">ໝາຍເຫດ</label>
                            <input type="text" class="form-control" name="annotation" placeholder="ກະລຸນາປ້ອນ ໝາຍເຫດ">
                            </div>
                           
                        </div>
                         
                        <button type="submit" class="btn btn-primary">ເພີ່ມ</button>
                        <a href="{{route('employee')}}" class="btn btn-danger">ຍົກເລີກ</a>
                        <button type="reset" class="btn btn-secondary">ລ້າງ</button>
                   </form>
                   
                </div>
              </div>
            </div>
            
            </div>
          </div>
        </section>

@endsection

@section('script')
<script>
function isNumber(evt)
  {
     var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

     return true;
  }
        </script>
@endsection