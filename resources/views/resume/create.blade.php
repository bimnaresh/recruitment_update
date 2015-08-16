@extends('index')

@section('content')

<div id="page-wrapper">
    
    <div class="row">
      <div class="col-lg-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                  Add Resume <strong>Step{{{ isset($state) ? $state : '1' }}}/8</strong>
                  @if (Session::has('message'))
                <div class="alert alert-danger">{{ Session::get('message') }}</div>
                @endif
              </div>                   
                  <div class="panel-body" id="tabs">
                  <!-- Nav tabs -->
                  <ul class="nav nav-pills">
                      <li class=" {{{ isset($state) ? ($state == 1) ? 'active in' : '' : 'active'}}}"><a href="#personal-pills" data-toggle="tab" aria-expanded="true">Personal Info</a></li>
                      <li class="{{{ isset($state) ? ($state == 2) ? 'active' : '' : ''}}}"><a href="#education-pills" data-toggle="tab" aria-expanded="false">Educational Info</a></li>
                      <li class="{{{ isset($state) ? ($state == 3) ? 'active' : '' : ''}}}"><a href="#work-pills" data-toggle="tab" aria-expanded="false">Work Experience</a></li>
                      <li class="{{{ isset($state) ? ($state == 4) ? 'active' : '' : ''}}}"><a href="#skills-pills" data-toggle="tab" aria-expanded="false">Skills</a></li>
                      <li class="{{{ isset($state) ? ($state == 5) ? 'active' : '' : ''}}}"><a href="#language-pills" data-toggle="tab" aria-expanded="false">Language</a></li>
                      <li class="{{{ isset($state) ? ($state == 6) ? 'active' : '' : ''}}}"><a href="#additional-pills" data-toggle="tab" aria-expanded="false">Additional Info</a></li>
                      <li class="{{{ isset($state) ? ($state == 7) ? 'active' : '' : ''}}}"><a href="#upload-pills" data-toggle="tab" aria-expanded="false">Upload Resume</a></li>
                      <li class="{{{ isset($state) ? ($state == 8) ? 'active' : '' : ''}}}"><a href="#privacy-pills" data-toggle="tab" aria-expanded="false">Privacy Setting</a></li>
                  </ul>
 
                  <!-- Tab panes -->
                  <div class="tab-content">
                       <!-- personal-section -->
                      <div class="tab-pane fade  {{{ isset($state) ? ($state == 1) ? 'active in' : '' : 'active in'}}}" id="personal-pills">
                         {!! Form::open(array('route' => 'resume.store', 'id' => 'sign_up','class' => '','method'=> 'POST', 'files' => true)) !!}
                         <input type="hidden" name="level" value='1'>
                         <input type="hidden" name="resumeId" value="{{{ isset($id) ? $id : '0' }}}">
                                        <?php 
                                        if(isset($id))
                                        $prv= DB::table('personalinformation')->where('id',$id)->first();
                                        ?>
                         <div class="form-group">
                           <div class="col-sm-6 parent-box ">
                               <div class="row">
                                   <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">First Name <span class="glyphicon-asterisk"></span></label>
                                   <div class="col-xs-12">
                                       <input class="form-control" id="fname" name="fname" type="text" value="{{{@$prv->fname}}}" required >
                                    </div>
                               </div>
                           </div>
                       </div>
                       
                      <div class="form-group">
                           <div class="col-sm-6 parent-box ">
                               <div class="row">
                                   <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true"> Last Name <span class="glyphicon-asterisk"></span></label>
                                   <div class="col-xs-12">
                                       <input class="form-control" id="lname" name="lname" value="{{{@$prv->lname}}}" type="text"  required >
                                    </div>
                               </div>
                           </div>
                       </div>
                          <div class="form-group">
                           <div class="col-sm-6 parent-box ">
                               <div class="row">
                                   
                                    <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Upload your Photo <span class="glyphicon-asterisk"></span></label>
                                  
                                   <div class="col-xs-12">
                                       <input class="form-control" name="resume_photo" type="file">
                                       
                                    </div>
                               </div>
                           </div>
                                 
                       </div>
                          <div class="form-group">
                           <div class="col-sm-6 parent-box ">
                               <div class="row">
                                   <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Upload your Passport copy <span class="glyphicon-asterisk"></span></label>
                                   <div class="col-xs-12">
                                       <input class="form-control" id="passport" name="passport" type="file">
                                      
                                    </div>
                               </div>
                           </div>
                              
                       </div>
                          <div class="form-section">
                               
                                 <div class="form-group">
                                     <div class="col-sm-6 parent-box top-row ">
                                         <div class="row">
                                             <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Date of Birth <span class="glyphicon-asterisk"></span></label>
                                             <div class="col-xs-12">
                                                  <input type="text" class="form-control calendar"  data-date-format="mm/dd/yy" name="dob" id="dp2" value="{{{@$prv->dob}}}" required >
                                              </div>
                                         </div>
                                      </div>
                                     <div class="col-sm-6 parent-box top-row ">
                                         <div class="row">
                                             <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Age <span class="glyphicon-asterisk"></span></label>
                                             <div class="col-xs-12">
                                                  <input class="form-control" placeholder="Age year" name="age" type="text" value="{{{@$prv->age}}}" required >
                                             
                                              </div>
                                         </div>
                                      </div>
                                 </div>
                              <div class="form-group">
                                   <div class="col-sm-6 parent-box top-row ">
                                      <div class="row">
                                          <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Gender<span class="glyphicon-asterisk"></span></label>
                                          <div class="col-xs-12">                                    
                                              <select class="form-control" name="gender" id="gender" required >
                                                  @if(isset($prv->gender))
                                                  <option value="">Select</option>
                                                  <option <?php echo ($prv->gender == "Male")?'selected':'' ; ?> value="Male" >Male</option>
                                                  <option <?php echo ($prv->gender == "Female")?'selected':'' ; ?> value="Female">Female</option>
                                                  @else
                                                  <option selected value="">Select</option>
                                                  <option value="Male" >Male</option>
                                                  <option value="Female">Female</option>
                                                  @endif
                                              </select>
                                          </div>
                                         
                                      </div>
                                    </div>
                                  <div class="col-sm-6 parent-box ">
                                         <div class="row">
                                             <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Height<span class="glyphicon-asterisk"></span></label>
                                             <div class="col-xs-12">
                                                 <input class="form-control" placeholder="Height ft." name="height" type="text" value="{{{@$prv->height}}}" required >
                                              </div>
                                         </div>
                                     </div>
                                  </div>
                                 
                                 <div class="form-group">
                                     <div class="col-sm-6 parent-box ">
                                         <div class="row">
                                             <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Email<span class="glyphicon-asterisk"></span></label>
                                             <div class="col-xs-12">
                                                 <input class="form-control" name="email" type="email" maxlength="100" value="{{{@$prv->email}}}" required >
                                              </div>
                                         </div>
                                     </div>
                                 
                              
                                     <div class="col-sm-6 parent-box top-row ">
                                        <div class="row">
                                            <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Nationality<span class="glyphicon-asterisk"></span></label>
                                            <div class="col-xs-12">                                    
                                                <select class="form-control" name="nationality" id="nationality" required >
                                                    
                                                    @if(isset($prv->nationality))                                                        
                                                         <option selected value="{{{$prv->nationality}}}" >{{{$prv->nationality}}}</option>
                                                   <option value="Nepal">Nepal</option>
                                                    <option value="USA">USA</option>
                                                     @else
                                                   <option selected disabled value="">Select </option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="USA">USA</option>
                                                   @endif
                                                </select>
                                            </div>
                                           
                                        </div>
                                      </div>
                                 </div>
                                 
                             
                                 <div class="form-group">
                                     <div class="col-sm-6 parent-box ">
                                         <div class="row">
                                             <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Mobile Number<span class="glyphicon-asterisk"></span></label>
                                             <div class="col-xs-12">
                                                 <input class="form-control" id="mobile" name="mobile" type="text" value="{{{@$prv->mobile}}}" required >
                                              </div>
                                         </div>
                                     </div>
                                 </div>
                                 
                                <div class="form-group">
                                     <div class="col-sm-6 parent-box ">
                                         <div class="row">
                                             <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email">Other Number</label>
                                             <div class="col-xs-12">
                                                 <input class="form-control" id="onumber" name="onumber" type="text" value="{{{@$prv->onumber}}}">
                                              </div>
                                         </div>
                                     </div>
                                 </div>
             <div class="form-group">
             <div class="col-sm-6 parent-box ">
               <div class="row">
                 <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Present Address<span class="glyphicon-asterisk"></span></label>
                 <div class="col-xs-12">
                   <input class="form-control" id="raddress1" name="raddress1" type="text" maxlength="100" value="{{{@$prv->raddress1}}}" required >
                 </div>
               </div>
             </div>
                 <div class="col-sm-6 parent-box ">
               <div class="row">
                 <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Permanent Address<span class="glyphicon-asterisk"></span></label>
                 <div class="col-xs-12">
                   <input class="form-control" id="raddress1" name="raddress2" type="text" maxlength="100" value="{{{@$prv->raddress2}}}" required >
                 </div>
               </div>
             </div>
          </div>
            
                                 
                                 <div class="form-group">
                                     <div class="col-sm-6 parent-box ">
                                         <div class="row">
                                             <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email">City<span class="glyphicon-asterisk"></span></label>
                                             <div class="col-xs-12">
                                                 <input class="form-control" id="city" name="city" type="text" value="{{{@$prv->city}}}" maxlength="100" required >
                                              </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <div class="col-sm-6 parent-box ">
                                         <div class="row">
                                             <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email">Postal Code<span class="glyphicon-asterisk"></span></label>
                                             <div class="col-xs-12">
                                                 <input class="form-control" id="postal_code" name="postal_code" type="text" value="{{{@$prv->postal_code}}}" maxlength="100" required>
                                              </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                   <div class="col-sm-6 parent-box top-row ">
                                      <div class="row">
                                          <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Country<span class="glyphicon-asterisk"></span></label>
                                          <div class="col-xs-12"> 
                                              
                                              <select class="form-control" name="country" id="country" required >
                                                @if(isset($prv->country))                                                        
                                                         <option selected value="{{{$prv->country}}}" >{{{$prv->country}}}</option>
                                                  <option value="Nepal" >Nepal</option>
                                                  <option value="USA">USA</option>
                                                  <option value="Malaysia">Malaysia</option>
                                                  <option value="Maldives">Maldives</option>
                                                     @else
                                                  <option selected disabled value="">Select </option>
                                                  <option value="Nepal" >Nepal</option>
                                                  <option value="USA">USA</option>
                                                  <option value="Malaysia">Malaysia</option>
                                                  <option value="Maldives">Maldives</option>
                                                  @endif
                                              </select>
                                          </div>
                                         
                                      </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                     <div class="col-sm-6 parent-box ">
                                         <div class="row">
                                             <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">State/Region<span class="glyphicon-asterisk"></span></label>
                                             <div class="col-xs-12">
                                                 <input class="form-control" id="state" name="state" type="text" maxlength="100" value="{{{@$prv->state}}}" required >
                                              </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                   <div class="col-sm-6 parent-box top-row ">
                                      <div class="row">
                                          <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Identification<span class="glyphicon-asterisk"></span></label>
                                          <div class="col-xs-12">                                    
                                              <select class="form-control" name="identification" id="identification" required >
                                                  @if(isset($prv->identification))                                                        
                                                         <option selected value="{{{$prv->identification}}}" >{{{$prv->identification}}}</option>
                                                  <option value="Social Card No.">Social Card No.</option>
                                                  <option value="Tax Card No.">Tax Card No.</option>
                                                  <option value="Driver's License No">Driver's License No.</option>
                                                 <option value="Passport No.">Passport No.</option>
                                                  <option value="Professional License No.">Professional License No.</option>
                                                 
                                                     @else
                                                  <option selected disabled value="">Select </option> 
                                                  <option value="Social Card No.">Social Card No.</option>
                                                  <option value="Tax Card No.">Tax Card No.</option>
                                                  <option value="Driver's License No">Driver's License No.</option>
                                                 <option value="Passport No.">Passport No.</option>
                                                  <option value="Professional License No.">Professional License No.</option>
                                                 @endif
                                              </select>
                                          </div>
                                         
                                      </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                     <div class="col-sm-6 parent-box ">
                                         <div class="row">
                                             <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Identification Number<span class="glyphicon-asterisk"></span></label>
                                             <div class="col-xs-12">
                                                 <input class="form-control" id="inumber" name="inumber" type="text" maxlength="100" value="{{{@$prv->inumber}}}" required >
                                              </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                        <div class="form-group">
                            <div class="col-sm-6 parent-box ">
                                         <div class="row">
                                              <div class="col-xs-12">
                                                  <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true"></label>
                                            
                           <!--<a href="#education-pills" data-toggle="tab" class="button gform_button big nexttab"><input type="button" class="btn btn-success btn-md" value="save and continue"></a>--> 
                            <input type="submit" class="btn btn-success btn-md"  value="save and continue">
                        </div>
                                         </div>
                            </div></div>
                       {!! Form::close() !!}   
                      </div>
                                <!-- Education-section -->
                       <div class="tab-pane fade {{{ isset($state) ? ($state == 2) ? 'active in' : '' : ''}}}" id="education-pills">
                          {!! Form::open(['route' => 'resume.store', 'id' => 'sign_up','class' => '','method'=> 'POST', 'files' => true]) !!}
                          <input type="hidden" name="level" value='2'>
                          <input type="hidden" name="resumeId" value="{{{ isset($id) ? $id : '0' }}}">
                          <?php 
                                        if(isset($id))
                                        $prv1= DB::table('educationinformation')->where('pid',$id)->first();
                                        ?> 
                          <div class="form-group">
                                <div class="col-sm-6 parent-box ">
                                    <div class="row">
                                        <label class="col-xs-12 control-label custom-control-label required c-text-left " id="lbl_email" aria-required="true">Institute/University<span class='glyphicon-asterisk'></span></label>
                                        <div class="col-xs-12">
                                            <input class="form-control" id="university" name="university" type="text" maxlength="100" value="{{{@$prv1->university}}}" required >
                                         </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 parent-box top-row ">
                                    <div class="row">
                                        <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Graduation Date <span class="glyphicon-asterisk"></span></label>
                                        
                                        <div class="col-xs-5">
                                            <select class="form-control" id="gmonth" name="gmonth" data-placeholder="Month" tabindex="-1" required >
                                                 @if(isset($prv1->gmonth))                                                        
                                                         <option selected value="{{{$prv1->gmonth}}}" >{{{$prv1->gmonth}}}</option>
                                                         <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September" >September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                                 @else
                                                <option selected="" value="">select</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September" >September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                                @endif
                                            </select>
                                         </div>
                                        <div class="col-xs-7">
                                            <input class="form-control" id="gyear" name="gyear" type="number" pattern="[0-9]*" min="0" maxlength="4"  placeholder="Year" value="{{{@$prv1->gyear}}}" required >
                                        </div>
                                    </div>
                                   </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-6 parent-box top-row ">
                                 <div class="row">
                                     <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Qualification <span class="glyphicon-asterisk"></span></label>
                                     <div class="col-xs-12">                                    
                                         <select class="form-control" name="qualification" id="qualification" required>
                                             @if(isset($prv1->qualification))                                                        
                                              <option selected value="{{{$prv1->qualification}}}" >{{{$prv1->qualification}}}</option>
                                             <option value="Primary/Secondary School/'O' Level"" title="Primary/Secondary School/'O' Level">Primary/Secondary School/'O' Level</option>
                                             <option value="Higher Secondary/Pre-U/'A' Level" title="Higher Secondary/Pre-U/'A' Level">Higher Secondary/Pre-U/'A' Level</option>
                                             <option value="Professional Certificate" title="Professional Certificate">Professional Certificate</option>
                                             <option value="Diploma" title="Diploma">Diploma</option>
                                             <option value="Advanced/Higher/Graduate Diploma" title="Advanced/Higher/Graduate Diploma">Advanced/Higher/Graduate Diploma</option>
                                             <option value="Bachelor's Degree" title="Bachelor's Degree">Bachelor's Degree</option>
                                             <option value="Post Graduate Diploma" title="Post Graduate Diploma">Post Graduate Diploma</option>
                                             <option value="Professional Degree" title="Professional Degree">Professional Degree</option>
                                             <option value="Master's Degree" title="Master's Degree">Master's Degree</option>
                                             <option value="Doctorate  (PhD)" title="Doctorate  (PhD)">Doctorate  (PhD)</option>
                                         
                                              @else          
                                             <option selected disabled value="">- Select Qualification -</option>
                                             <option value="Primary/Secondary School/'O' Level"" title="Primary/Secondary School/'O' Level">Primary/Secondary School/'O' Level</option>
                                             <option value="Higher Secondary/Pre-U/'A' Level" title="Higher Secondary/Pre-U/'A' Level">Higher Secondary/Pre-U/'A' Level</option>
                                             <option value="Professional Certificate" title="Professional Certificate">Professional Certificate</option>
                                             <option value="Diploma" title="Diploma">Diploma</option>
                                             <option value="Advanced/Higher/Graduate Diploma" title="Advanced/Higher/Graduate Diploma">Advanced/Higher/Graduate Diploma</option>
                                             <option value="Bachelor's Degree" title="Bachelor's Degree">Bachelor's Degree</option>
                                             <option value="Post Graduate Diploma" title="Post Graduate Diploma">Post Graduate Diploma</option>
                                             <option value="Professional Degree" title="Professional Degree">Professional Degree</option>
                                             <option value="Master's Degree" title="Master's Degree">Master's Degree</option>
                                             <option value="Doctorate  (PhD)" title="Doctorate  (PhD)">Doctorate  (PhD)</option>
                                         @endif
                                         </select>
                                     </div>
                                    
                                 </div>
                               </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-6 parent-box top-row ">
                                 <div class="row">
                                     <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Institute/University Location <span class="glyphicon-asterisk"></span></label>
                                     <div class="col-xs-12">                                    
                                         <select class="form-control" name="ulocation" id="ulocation" required >
                                            @if(isset($prv1->ulocation))                                                        
                                              <option selected value="{{{$prv1->ulocation}}}" >{{{$prv1->ulocation}}}</option>
                                              <option value="Afghanistan">Afghanistan</option>
                                              <option value="Albania">Albania</option>
                                              <option value="Algeria">Algeria</option>
                                              <option value="American Samoa">American Samoa</option>
                                              <option value="Andorra">Andorra</option>
                                              <option value="Angola">Angola</option>
                                              <option value="Australia">Australia</option>
                                              <option value="Austria">Austria</option>
                                               <option value="Bhutan">Bhutan</option>
                                              <option value="Canada">Canada</option>
                                              <option value="Egypt">Egypt</option>
                                              <option value="Finland">Finland</option>
                                              <option value="France">France</option>
                                              <option value="Malaysia">Malaysia</option>
                                              <option value="Maldives">Maldives</option>
                                              @else
                                             <option selected disabled value="">- Select Location -</option>
                                               <option value="Afghanistan">Afghanistan</option>
                                              <option value="Albania">Albania</option>
                                              <option value="Algeria">Algeria</option>
                                              <option value="American Samoa">American Samoa</option>
                                              <option value="Andorra">Andorra</option>
                                              <option value="Angola">Angola</option>
                                              <option value="Australia">Australia</option>
                                              <option value="Austria">Austria</option>
                                               <option value="Bhutan">Bhutan</option>
                                              <option value="Canada">Canada</option>
                                              <option value="Egypt">Egypt</option>
                                              <option value="Finland">Finland</option>
                                              <option value="France">France</option>
                                              <option value="Malaysia">Malaysia</option>
                                              <option value="Maldives">Maldives</option>
                                              @endif
                                         </select>
                                     </div>
                                    
                                 </div>
                               </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-6 parent-box top-row ">
                                 <div class="row">
                                     <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Field of Study <span class="glyphicon-asterisk"></span></label>
                                     <div class="col-xs-12">                                    
                                         <select class="form-control" name="studyField" id="studyField" required>
                                              @if(isset($prv1->study_field))                                                        
                                              <option selected value="{{{$prv1->study_field}}}" >{{{$prv1->study_field}}}</option>
                                             <option value="Advertising/Media" title="Advertising/Media">Advertising/Media</option>
                                             <option value="Agriculture/Aquaculture/Forestry" title="Agriculture/Aquaculture/Forestry">Agriculture/Aquaculture/Forestry</option>
                                             <option value="Airline Operation/Airport Management" title="Airline Operation/Airport Management">Airline Operation/Airport Management</option>
                                             <option value="Architecture" title="Architecture">Architecture</option><option value="1" title="Art/Design/Creative Multimedia">Art/Design/Creative Multimedia</option>
                                             <option value="Biology" title="Biology">Biology</option><option value="55" title="BioTechnology">BioTechnology</option>
                                             <option value="Business Studies/Administration/Management" title="Business Studies/Administration/Management">Business Studies/Administration/Management</option>
                                             <option value="Chemistry" title="Chemistry">Chemistry</option><option value="54" title="Commerce">Commerce</option>
                                             <option value="Computer Science/Information Technology" title="Computer Science/Information Technology">Computer Science/Information Technology</option>
                                             <option value="Dentistry" title="Dentistry">Dentistry</option><option value="15" title="Economics">Economics</option>
                                             <option value="Journalism" title="Journalism">Journalism</option>
                                             <option value="Education/Teaching/Training" title="Education/Teaching/Training">Education/Teaching/Training</option>
                                              <option value="Engineering (Chemical)" title="Engineering (Chemical)">Engineering (Chemical)</option>
                                             <option value="Engineering (Civil)" title="Engineering (Civil)">Engineering (Civil)</option>
                                             <option value="Engineering (Computer/Telecommunication)" title="Engineering (Computer/Telecommunication)">Engineering (Computer/Telecommunication)</option>
                                             <option value="Engineering (Electrical/Electronic)" title="Engineering (Electrical/Electronic)">Engineering (Electrical/Electronic)</option>
                                             <option value="Engineering (Environmental/Health/Safety)" title="Engineering (Environmental/Health/Safety)">Engineering (Environmental/Health/Safety)</option>
                                             <option value="Engineering (Industrial)" title="Engineering (Industrial)">Engineering (Industrial)</option>
                                             <option value="Engineering (Marine)" title="Engineering (Marine)">Engineering (Marine)</option>
                                             <option value="Engineering (Material Science)" title="Engineering (Material Science)">Engineering (Material Science)</option>
                                             <option value="Engineering (Mechanical)" title="Engineering (Mechanical)">Engineering (Mechanical)</option>
                                             <option value="Engineering (Mechatronic/Electromechanical)" title="Engineering (Mechatronic/Electromechanical)">Engineering (Mechatronic/Electromechanical)</option>
                                             <option value="Engineering (Metal Fabrication/Tool &amp; Die/Welding)" title="Engineering (Metal Fabrication/Tool &amp; Die/Welding)">Engineering (Metal Fabrication/Tool &amp; Die/Welding)</option>
                                              <option value="Finance/Accountancy/Banking" title="Finance/Accountancy/Banking">Finance/Accountancy/Banking</option>
                                              <option value="History" title="History">History</option>
                                               @else
                                             <option selected disabled value="">- Select Field -</option>
                                             <option value="Advertising/Media" title="Advertising/Media">Advertising/Media</option>
                                             <option value="Agriculture/Aquaculture/Forestry" title="Agriculture/Aquaculture/Forestry">Agriculture/Aquaculture/Forestry</option>
                                             <option value="Airline Operation/Airport Management" title="Airline Operation/Airport Management">Airline Operation/Airport Management</option>
                                             <option value="Architecture" title="Architecture">Architecture</option><option value="1" title="Art/Design/Creative Multimedia">Art/Design/Creative Multimedia</option>
                                             <option value="Biology" title="Biology">Biology</option><option value="55" title="BioTechnology">BioTechnology</option>
                                             <option value="Business Studies/Administration/Management" title="Business Studies/Administration/Management">Business Studies/Administration/Management</option>
                                             <option value="Chemistry" title="Chemistry">Chemistry</option><option value="54" title="Commerce">Commerce</option>
                                             <option value="Computer Science/Information Technology" title="Computer Science/Information Technology">Computer Science/Information Technology</option>
                                             <option value="Dentistry" title="Dentistry">Dentistry</option><option value="15" title="Economics">Economics</option>
                                             <option value="Journalism" title="Journalism">Journalism</option>
                                             <option value="Education/Teaching/Training" title="Education/Teaching/Training">Education/Teaching/Training</option>
                                              <option value="Engineering (Chemical)" title="Engineering (Chemical)">Engineering (Chemical)</option>
                                             <option value="Engineering (Civil)" title="Engineering (Civil)">Engineering (Civil)</option>
                                             <option value="Engineering (Computer/Telecommunication)" title="Engineering (Computer/Telecommunication)">Engineering (Computer/Telecommunication)</option>
                                             <option value="Engineering (Electrical/Electronic)" title="Engineering (Electrical/Electronic)">Engineering (Electrical/Electronic)</option>
                                             <option value="Engineering (Environmental/Health/Safety)" title="Engineering (Environmental/Health/Safety)">Engineering (Environmental/Health/Safety)</option>
                                             <option value="Engineering (Industrial)" title="Engineering (Industrial)">Engineering (Industrial)</option>
                                             <option value="Engineering (Marine)" title="Engineering (Marine)">Engineering (Marine)</option>
                                             <option value="Engineering (Material Science)" title="Engineering (Material Science)">Engineering (Material Science)</option>
                                             <option value="Engineering (Mechanical)" title="Engineering (Mechanical)">Engineering (Mechanical)</option>
                                             <option value="Engineering (Mechatronic/Electromechanical)" title="Engineering (Mechatronic/Electromechanical)">Engineering (Mechatronic/Electromechanical)</option>
                                             <option value="Engineering (Metal Fabrication/Tool &amp; Die/Welding)" title="Engineering (Metal Fabrication/Tool &amp; Die/Welding)">Engineering (Metal Fabrication/Tool &amp; Die/Welding)</option>
                                              <option value="Finance/Accountancy/Banking" title="Finance/Accountancy/Banking">Finance/Accountancy/Banking</option>
                                              <option value="History" title="History">History</option>
                                              @endif
                                         </select>
                                     </div>
                                    
                                 </div>
                               </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 parent-box ">
                                    <div class="row">
                                        <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Major <span class="glyphicon-asterisk"></span></label>
                                        <div class="col-xs-12">
                                            <input class="form-control" id="major" name="major" type="text" maxlength="100" value="{{{@$prv1->major}}}" required >
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-6 parent-box top-row ">
                                 <div class="row">
                                     <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Percentage/CGPA </label>
                                     <div class="col-xs-12">                                    
                                         <input class="form-control" name="grade" type="text" maxlength="100" value="{{{@$prv1->grade}}}" required >
                                         
                                     </div>
                                    
                                 </div>
                               </div>
                            </div>
                            <div class="form-group">
                           <div class="col-sm-6 parent-box ">
                               <div class="row">
                                   <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Upload your Higher Education Certificate <span class="glyphicon-asterisk"></span></label>
                                   <div class="col-xs-12">
                                       <input class="form-control" name="resume_certificate" type="file">
                                    </div>
                               </div>
                           </div>
                       </div>
                            <div class="form-group">
                            <div class="col-sm-6 parent-box ">
                                         <div class="row">
                                              <div class="col-xs-12">
                                                  <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true"></label>
                                            
                                                  <input type="submit" class="btn btn-success btn-md" value="save and continue">
                                              </div></div></div></div>
                                              {!! Form::close() !!}  
                      </div> 
                       <!-- work-section -->
                       <div class="tab-pane fade {{{ isset($state) ? ($state == 3) ? 'active in' : '' : ''}}}" id="work-pills">
                          
                        
                        {!! Form::open(['route' => 'resume.store', 'id' => 'sign_up','class' => '','method'=> 'POST', 'files' => true]) !!}
                        <input type="hidden" name="level" value='3'>
                        <input type="hidden" name="resumeId" value="{{{ isset($id) ? $id : '0' }}}">
                        <?php            
                                        if(isset($id))
                                        $prv2= DB::table('experienceinformation')->where('pid',$id)->first();
                                        ?> 
                        <div class="form-group">
                            <div class="col-sm-6 parent-box ">
                                <div class="row">
                                    <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Position Title <span class="glyphicon-asterisk"></span></label>
                                    <div class="col-xs-12">
                                        <input class="form-control" id="position_title" name="position_title" type="text" maxlength="100" value="{{{@$prv2->position_title}}}">
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6 parent-box ">
                                <div class="row">
                                    <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Company Name</label>
                                    <div class="col-xs-12">
                                        <input class="form-control" id="company_name" name="company_name" type="text" maxlength="100" value="{{{@$prv2->company_name}}}">
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 parent-box ">
                                <div class="row">
                                    <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Work Duration</label>
                                    
                                </div>
                            </div>
                        <div class="col-sm-6 parent-box top-row ">
                              <div class="row">
                                  <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Total Year of Experience</label>
                                  
                                  <div class="col-xs-12">
                                      <input type="text" class="form-control" name="experience" value="{{{@$prv2->experience}}}">
                                   </div>
                                  
                              </div>
                             </div>
                            <div class="col-sm-3 parent-box top-row ">
                              <div class="row">
                                  <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">From</label>
                                  
                                  <div class="col-xs-12">
                                      <input type="text" class="form-control calendar"  data-date-format="mm/dd/yy" name="from_date" value="{{{isset($prv2->from_date)?date("Y-m-d",strtotime($prv2->from_date)):''}}}">
                                   </div>
                                  
                              </div>
                             </div>
                        
                            <div class="col-sm-3 parent-box top-row ">
                              <div class="row">
                                  <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">To</label>
                                  
                                  <div class="col-xs-9">
                                      <input type="text" class="form-control calendar"  data-date-format="mm/dd/yy" name="to_date" <?php if(@$prv2->to_date!=1) { ?>value="{{{isset($prv2->to_date)?date("Y-m-d",strtotime($prv2->to_date)):''}}}"<?php } ?>>
                                   </div>
                                  
                                  <div class="col-xs-3"><input type="checkbox" name="wpresent" value="{{{@$prv2->to_date}}}" <?php if(@$prv2->to_date){echo (@$prv2->to_date==1)?"checked":"" ;}?>>Present</div>
                              </div>
                             </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6 parent-box ">
                                <div class="row">
                                    <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Specialization</label>
                                    <div class="col-xs-12">
                                        <input class="form-control" id="specialization" name="specialization" type="text" maxlength="100" value="{{{@$prv2->specialization}}}">
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6 parent-box ">
                                <div class="row">
                                    <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Role</label>
                                    <div class="col-xs-12">
                                        <input class="form-control" name="role" type="text" maxlength="100" value="{{{@$prv2->role}}}">
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6 parent-box ">
                                <div class="row">
                                    <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Country</label>
                                    <div class="col-xs-12">
                                        <input class="form-control" name="country" type="text" maxlength="100" value="{{{@$prv2->country}}}">
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-6 parent-box top-row ">
                             <div class="row">
                                 <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Industry </label>
                                 <div class="col-xs-12">                                    
                                     <select class="form-control" name="industry" id="industry">
                                         @if(isset($prv2->industry))                                                        
                                              <option selected value="{{{$prv2->industry}}}" >{{{$prv2->industry}}}</option>
                                               <option title="Accounting / Audit / Tax Services" value="Accounting / Audit / Tax Services"> Accounting / Audit / Tax Services </option>
                                         <option title="Advertising / Marketing / Promotion / PR" value="Advertising / Marketing / Promotion / PR "> Advertising / Marketing / Promotion / PR </option>
                                         <option title="Aerospace / Aviation / Airline" value="Aerospace / Aviation / Airline"> Aerospace / Aviation / Airline </option>
                                         <option title="Agricultural / Plantation / Poultry / Fisheries" value="Agricultural / Plantation / Poultry / Fisheries"> Agricultural / Plantation / Poultry / Fisheries </option>
                                         <option title="Apparel" value="Apparel"> Apparel </option>
                                         <option title="Architectural Services / Interior Designing" value="Architectural Services / Interior Designing"> Architectural Services / Interior Designing </option>
                                         <option title="Arts / Design / Fashion" value="Arts / Design / Fashion"> Arts / Design / Fashion </option>
                                         <option title="Automobile / Automotive Ancillary / Vehicle" value="Automobile / Automotive Ancillary / Vehicle"> Automobile / Automotive Ancillary / Vehicle </option>
                                         <option title="Banking / Financial Services" value="Banking / Financial Services"> Banking / Financial Services </option>
                                         <option title="BioTechnology / Pharmaceutical / Clinical research" value="BioTechnology / Pharmaceutical / Clinical research"> BioTechnology / Pharmaceutical / Clinical research </option>
                                         <option title="Call Center / IT-Enabled Services / BPO" value="Call Center / IT-Enabled Services / BPO"> Call Center / IT-Enabled Services / BPO </option>
                                         <option title="Chemical / Fertilizers / Pesticides" value="Chemical / Fertilizers / Pesticides"> Chemical / Fertilizers / Pesticides </option>
                                         <option title="Computer / Information Technology (Hardware)" value="Computer / Information Technology (Hardware)"> Computer / Information Technology (Hardware) </option>
                                         <option title="Computer / Information Technology (Software)" value="Computer / Information Technology (Software)"> Computer / Information Technology (Software) </option>
                                         <option title="Construction / Building / Engineering" value="Construction / Building / Engineering"> Construction / Building / Engineering </option>
                                         <option title="Consulting (Business &amp; Management)" value="Consulting (Business &amp; Management)"> Consulting (Business &amp; Management) </option>
                                         <option title="Consulting (IT, Science, Engineering &amp; Technical)" value="Consulting (IT, Science, Engineering &amp; Technical)"> Consulting (IT, Science, Engineering &amp; Technical) </option>
                                         <option title="Consumer Products / FMCG" value="Consumer Products / FMCG"> Consumer Products / FMCG </option>
                                         <option title="Education" value="Education"> Education </option>
                                         <option title="Electrical &amp; Electronics" value="Electrical &amp; Electronics"> Electrical &amp; Electronics </option>
                                         <option title="Entertainment / Media" value="Entertainment / Media"> Entertainment / Media </option>
                                         <option title="Environment / Health / Safety" value="Environment / Health / Safety"> Environment / Health / Safety </option>
                                         <option title="Exhibitions / Event management / MICE" value="Exhibitions / Event management / MICE"> Exhibitions / Event management / MICE </option>
                                         <option title="Food &amp; Beverage / Catering / Restaurant" value="Food &amp; Beverage / Catering / Restaurant"> Food &amp; Beverage / Catering / Restaurant </option>
                                          <option value="Others">Others</option>
                                              @else 
                                         <option selected disabled value="">- Select -</option>                                         
                                         <option title="Accounting / Audit / Tax Services" value="Accounting / Audit / Tax Services"> Accounting / Audit / Tax Services </option>
                                         <option title="Advertising / Marketing / Promotion / PR" value="Advertising / Marketing / Promotion / PR "> Advertising / Marketing / Promotion / PR </option>
                                         <option title="Aerospace / Aviation / Airline" value="Aerospace / Aviation / Airline"> Aerospace / Aviation / Airline </option>
                                         <option title="Agricultural / Plantation / Poultry / Fisheries" value="Agricultural / Plantation / Poultry / Fisheries"> Agricultural / Plantation / Poultry / Fisheries </option>
                                         <option title="Apparel" value="Apparel"> Apparel </option>
                                         <option title="Architectural Services / Interior Designing" value="Architectural Services / Interior Designing"> Architectural Services / Interior Designing </option>
                                         <option title="Arts / Design / Fashion" value="Arts / Design / Fashion"> Arts / Design / Fashion </option>
                                         <option title="Automobile / Automotive Ancillary / Vehicle" value="Automobile / Automotive Ancillary / Vehicle"> Automobile / Automotive Ancillary / Vehicle </option>
                                         <option title="Banking / Financial Services" value="Banking / Financial Services"> Banking / Financial Services </option>
                                         <option title="BioTechnology / Pharmaceutical / Clinical research" value="BioTechnology / Pharmaceutical / Clinical research"> BioTechnology / Pharmaceutical / Clinical research </option>
                                         <option title="Call Center / IT-Enabled Services / BPO" value="Call Center / IT-Enabled Services / BPO"> Call Center / IT-Enabled Services / BPO </option>
                                         <option title="Chemical / Fertilizers / Pesticides" value="Chemical / Fertilizers / Pesticides"> Chemical / Fertilizers / Pesticides </option>
                                         <option title="Computer / Information Technology (Hardware)" value="Computer / Information Technology (Hardware)"> Computer / Information Technology (Hardware) </option>
                                         <option title="Computer / Information Technology (Software)" value="Computer / Information Technology (Software)"> Computer / Information Technology (Software) </option>
                                         <option title="Construction / Building / Engineering" value="Construction / Building / Engineering"> Construction / Building / Engineering </option>
                                         <option title="Consulting (Business &amp; Management)" value="Consulting (Business &amp; Management)"> Consulting (Business &amp; Management) </option>
                                         <option title="Consulting (IT, Science, Engineering &amp; Technical)" value="Consulting (IT, Science, Engineering &amp; Technical)"> Consulting (IT, Science, Engineering &amp; Technical) </option>
                                         <option title="Consumer Products / FMCG" value="Consumer Products / FMCG"> Consumer Products / FMCG </option>
                                         <option title="Education" value="Education"> Education </option>
                                         <option title="Electrical &amp; Electronics" value="Electrical &amp; Electronics"> Electrical &amp; Electronics </option>
                                         <option title="Entertainment / Media" value="Entertainment / Media"> Entertainment / Media </option>
                                         <option title="Environment / Health / Safety" value="Environment / Health / Safety"> Environment / Health / Safety </option>
                                         <option title="Exhibitions / Event management / MICE" value="Exhibitions / Event management / MICE"> Exhibitions / Event management / MICE </option>
                                         <option title="Food &amp; Beverage / Catering / Restaurant" value="Food &amp; Beverage / Catering / Restaurant"> Food &amp; Beverage / Catering / Restaurant </option>
                                          <option value="Others">Others</option>
                                         @endif

                                   </select>
                                 </div>
                                
                             </div>
                           </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-6 parent-box top-row ">
                             <div class="row">
                                 <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Position Level </label>
                                 <div class="col-xs-12">                                    
                                     <select class="form-control" name="position_level" id="position_level">
                                         @if(isset($prv2->position_level))                                                        
                                              <option selected value="{{{$prv2->position_level}}}" >{{{$prv2->position_level}}}</option>
                                          <option title="Senior Manager" value="Senior Manager"> Senior Manager </option>
                                            <option title="Manager" value="Manager"> Manager </option>
                                            <option title="Senior Executive" value="Senior Executive"> Senior Executive </option>
                                            <option title="Junior Executive" value="Junior Executive"> Junior Executive </option>
                                            <option title="Fresh / Entry Level" value="Fresh / Entry Level"> Fresh / Entry Level </option>
                                            <option title="Non-Executive" value="Non-Executive"> Non-Executive </option>
                                           
                                              @else 
                                         <option selected disabled value="">- Select -</option>

                                            <option title="Senior Manager" value="Senior Manager"> Senior Manager </option>
                                            <option title="Manager" value="Manager"> Manager </option>
                                            <option title="Senior Executive" value="Senior Executive"> Senior Executive </option>
                                            <option title="Junior Executive" value="Junior Executive"> Junior Executive </option>
                                            <option title="Fresh / Entry Level" value="Fresh / Entry Level"> Fresh / Entry Level </option>
                                            <option title="Non-Executive" value="Non-Executive"> Non-Executive </option>
                                            @endif
                                   </select>
                                 </div>
                                
                             </div>
                           </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6 parent-box top-row ">
                              <div class="row">
                                  <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Monthly Salary <span class="glyphicon-asterisk"></span></label>
                                  
                                  <div class="col-xs-5">
                                      <select class="form-control" id="monthly_salary" name="currency" data-placeholder="Month" tabindex="-1" >
                                           @if(isset($prv2->currency))                                                        
                                              <option selected value="{{{$prv2->currency}}}" >{{{$prv2->currency}}}</option>
                                          <option value="MYR">MYR</option><option value="SGD">SGD</option><option value="USD">USD</option><option value="INR">INR</option><option value="AUD">AUD</option><option value="HKD">HKD</option><option value="EUR">EUR</option>
                                          
                                              @else
                                          <option selected disabled value="">Currency</option>
                                          <option value="MYR">MYR</option><option value="SGD">SGD</option><option value="USD">USD</option><option value="INR">INR</option><option value="AUD">AUD</option><option value="HKD">HKD</option><option value="EUR">EUR</option>
                                          @endif
                                      </select>
                                   </div>
                                  <div class="col-xs-7">
                                      <input class="form-control" id="salary" name="salary" type="number" pattern="[0-9]*" min="0" value="{{{@$prv2->salary}}}" >
                                  </div>
                              </div>
                             </div>
                        </div>
                        <div class="form-group">
                           <div class="col-sm-6 parent-box ">
                               <div class="row">
                                   <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Upload your Experience Certificate</label>
                                   <div class="col-xs-12">
                                       <input class="form-control" id="exp_certificate" name="exp_certificate" type="file">
                                    </div>
                               </div>
                           </div>
                       </div>

                         <div class="form-group">
                            <div class="col-sm-12 parent-box ">
                                         <div class="row">
                                              <div class="col-xs-12">
                                                  <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true"></label>
                                            
                                                  <input type="submit" class="btn btn-success btn-md" value="save and continue">
                                              </div></div></div></div>
                                              {!! Form::close() !!}
                      </div> <!--
                      <!-- Skills-section -->
                      
           <div class="tab-pane fade {{{ isset($state) ? ($state == 4) ? 'active in' : '' : ''}}}" id="skills-pills">
                     {!! Form::open(['route' => 'resume.store', 'id' => 'sign_up','class' => '','method'=> 'POST', 'files' => true]) !!}
                     <input type="hidden" name="level" value='4'>
                     <input type="hidden" name="resumeId" value="{{{ isset($id) ? $id : '0' }}}">
                        
                         <?php            
                                        if(isset($id))
                                        $prv3= DB::table('skillsinformation')->where('pid',$id)->get();
                                        ?> 
                     @if(@$prv3)
                     <div id="skillContainer">
                        
                     <?php $i=0; ?>
                         @foreach($prv3 as $sprv3)
                   <?php  $i=$i+1;?>
                     
                    
                         <div class="form-group ">
                             <div class="col-sm-6 parent-box ">
                                 <div class="row">
                                     <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Skills</label>
                                     <div class="col-xs-12">
                                         <input class="form-control" id="skills" name="<?php echo 'skill_'.$i;?>" type="text" value="{{{$sprv3->skills}}}">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="col-sm-6 parent-box ">
                                 <div class="row">
                                     <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true"> Proficiency</label>
                                     <div class="col-xs-12">
                                         <select class="form-control" name="<?php echo 'proficiency_'.$i;?>" >
                                              @if(isset($sprv3->proficiency))                                                        
                                              <option selected value="{{{$sprv3->proficiency}}}" >{{{$sprv3->proficiency}}}</option>
                                              <option value="Beginner" >Beginner</option>
                                             <option value="novice">novice</option>
                                             <option value="expert">expert</option>
                                              @else
                                             <option selected disabled value="">Select </option>
                                             <option value="Beginner" >Beginner</option>
                                             <option value="novice">novice</option>
                                             <option value="expert">expert</option>
                                             @endif
                                         </select> </div>
                                 </div>
                             </div>
                         </div>
                         <div class="form-group col-sm-12">
                             <div class="col-sm-6 parent-box ">
                                 <div class="row">
                                     <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Upload your Skills Certificate</label>
                                     <div class="col-xs-12">
                                         <input class="form-control" id="skills_certificate" name="<?php echo 'skills_certificate_'.$i;?>" type="file">
                                     </div>
                                 </div>
                             </div>
                         </div>
                     @endforeach
                   
                     </div>
                     <input type="hidden" id="skillCount" name="skillCount" value="<?php echo $i;?>" />
                    <div class="form-group">
                           <div class="col-sm-12 parent-box ">
                               <div class="row">
                                   <a id="addSkill" data-toggle="tab" aria-expanded="false">Add Skills</a>
                               </div>
                           </div>
                       </div>
                     @else
                          
                     <input type="hidden" id="skillCount" name="skillCount" value="1" />
                     <div id="skillContainer">
                         <div class="form-group ">
                             <div class="col-sm-6 parent-box ">
                                 <div class="row">
                                     <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Skills</label>
                                     <div class="col-xs-12">
                                         <input class="form-control" id="skills" name="skill_1" type="text">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="col-sm-6 parent-box ">
                                 <div class="row">
                                     <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true"> Proficiency</label>
                                     <div class="col-xs-12">
                                         <select class="form-control" name="proficiency_1" >
                                             <option selected disabled value="">Select </option>
                                             <option value="Beginner" >Beginner</option>
                                             <option value="novice">novice</option>
                                             <option value="expert">expert</option>
                                         </select> </div>
                                 </div>
                             </div>
                         </div>
                         <div class="form-group col-sm-12">
                             <div class="col-sm-6 parent-box ">
                                 <div class="row">
                                     <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Upload your Skills Certificate</label>
                                     <div class="col-xs-12">
                                         <input class="form-control" id="skills_certificate" name="skills_certificate_1" type="file">
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                       
                       
                     <div class="form-group">
                           <div class="col-sm-12 parent-box ">
                               <div class="row">
                                   <a id="addSkill" data-toggle="tab" aria-expanded="false">Add Skills</a>
                               </div>
                           </div>
                       </div>
               @endif
                       <div class="form-group">
                            <div class="col-sm-12 parent-box ">
                                         <div class="row">
                                              <div class="col-xs-12">
                                                  <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true"></label>
                                            
                              <input type="submit" class="btn btn-success btn-md" value="save and continue">
                                              </div></div></div></div>   
                                            {!! Form::close() !!}
            </div>
                      <!-- Language-section -->
                       <div class="tab-pane fade {{{ isset($state) ? ($state == 5) ? 'active in' : '' : ''}}}" id="language-pills">

                            {!! Form::open(['route' => 'resume.store', 'id' => 'sign_up','class' => '']) !!}
                            <input type="hidden" name="level" value='5'>
                            <input type="hidden" name="resumeId" value="{{{ isset($id) ? $id : '0' }}}">
                           <?php         
                                        if(isset($id))
                                        $prv4= DB::table('languageinformation')->where('pid',$id)->get();
                                        ?> 
                             @if(@$prv4)
                              <div id="languagaContainer">
                                         <?php $i=0; ?>
                         @foreach($prv4 as $lprv4)
                           <?php  $i=$i+1;?>
                         <div class="form-group">
                              <div class="col-sm-4 parent-box ">
                                <div class="row">
                                   <label class="col-xs-12 control-label custom-control-label required ." . aria-required="true">Language <span class="glyphicon-asterisk"></span></label>
                                  <div class="col-xs-12">
                                    <input class='form-control'  name="<?php echo('language_'.$i); ?>" type='text' value="{{{$lprv4->language}}}">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                              <div class="col-sm-4 parent-box ">
                                <div class="row">
                                  <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Spoken <span class="glyphicon-asterisk"></span></label>
                                    
                                  <div class="col-xs-12">
                                     <select class="form-control"  name="<?php echo('lspoken_'.$i); ?>"tabindex="-1" required>
                                        @if(isset($lprv4->lspoken))                                                        
                                              <option selected value="{{{$lprv4->lspoken}}}" >{{{$lprv4->lspoken}}}</option>
                                         <option value="Excellent">Excellent</option>
                                        <option value="good">good</option>
                                        <option value="average">average</option>
                                          @else
                                         <option selected disabled value="">select</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="good">good</option>
                                        <option value="average">average</option>
                                        @endif
                                      </select>
                                    </div>
                                  </div>
                                </div>

                              </div>
                              <div class="form-group">
                              <div class="col-sm-4 parent-box ">
                                <div class="row">
                                    <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Written <span class="glyphicon-asterisk"></span></label>
                                    <div class="col-xs-12">
                                    <select class="form-control" id="lspoken" name="<?php echo('lwritten_'.$i); ?>" tabindex="-1" required>
                                      @if(isset($lprv4->lwritten))                                                        
                                              <option selected value="{{{$lprv4->lwritten}}}" >{{{$lprv4->lwritten}}}</option>
                                         <option value="Excellent">Excellent</option>
                                        <option value="good">good</option>
                                        <option value="average">average</option>
                                          @else
                                         <option selected disabled value="">select</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="good">good</option>
                                        <option value="average">average</option>
                                        @endif
                                    </select>
                                    </div>
                                  </div>
                                </div>
                                
                              </div>             
                         @endforeach
                         </div>              
                             <input type="hidden" name="languageCount" id="languageCount" value="<?php echo $i;?>">
                              <a id="addLanguage" data-toggle="tab" aria-expanded="false">Add Language</a>
                         @else
                               <input type="hidden" name="languageCount" id="languageCount" value="1">
                            <div id="languagaContainer">
                            <div class="form-group">
                              <div class="col-sm-4 parent-box ">
                                <div class="row">
                                   <label class="col-xs-12 control-label custom-control-label required ." . aria-required="true">Language <span class="glyphicon-asterisk"></span></label>
                                  <div class="col-xs-12">
                                    <input class='form-control'  name='language_1' type='text'>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                              <div class="col-sm-4 parent-box ">
                                <div class="row">
                                  <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Spoken <span class="glyphicon-asterisk"></span></label>
                                    
                                  <div class="col-xs-12">
                                     <select class="form-control"  name="lspoken_1"tabindex="-1" required>
                                        <option selected disabled value="">select</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="good">good</option>
                                        <option value="average">average</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>

                              </div>
                              <div class="form-group">
                              <div class="col-sm-4 parent-box ">
                                <div class="row">
                                    <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Written <span class="glyphicon-asterisk"></span></label>
                                    <div class="col-xs-12">
                                    <select class="form-control" id="lspoken" name="lwritten_1" tabindex="-1" required>
                                      <option selected disabled value="">select</option>
                                      <option value="Excellent">Excellent</option>
                                      <option value="good">good</option>
                                      <option value="average">average</option>
                                    </select>
                                    </div>
                                  </div>
                                </div>
                                
                              </div>                                
                              </div>
                            

                              <a id="addLanguage" data-toggle="tab" aria-expanded="false">Add Language</a>
                              @endif
                              <div class="form-group">
                                <div class="col-sm-12 parent-box ">
                                 <div class="row">
                                  <div class="col-xs-12">
                                    <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true"></label>

                                    <input type="submit" class="btn btn-success btn-md" value="save and continue">
                                  </div></div></div></div>
                                  {!! Form::close() !!}
                                </div>
                      <!-- Additional-section -->
                      <div class="tab-pane fade {{{ isset($state) ? ($state == 6) ? 'active in' : '' : ''}}}" id="additional-pills">
                      {!! Form::open(['route' => 'resume.store', 'id' => 'sign_up','class' => '','method'=> 'POST', 'files' => true]) !!}
                      <input type="hidden" name="level" value='6'>
                      <input type="hidden" name="resumeId" value="{{{ isset($id) ? $id : '0' }}}">
                       <?php            
                                        if(isset($id))
                                        $prv5= DB::table('additionalinformation')->where('pid',$id)->first();
                                        
                                        ?> 
                       <div class="form-group">
                         <div class="col-sm-6 parent-box top-row ">
                              <div class="row">
                                  <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Expected Salary</label>
                                  
                                  <div class="col-xs-5">
                                      <select class="form-control" id="monthly_salary" name="currency" data-placeholder="Month" tabindex="-1">
                                          
                                           @if(isset($prv5->currency))                                                        
                                              <option selected value="{{{$prv5->currency}}}" >{{{$prv5->currency}}}</option>
                                          <option value="MYR">MYR</option><option value="SGD">SGD</option><option value="USD">USD</option><option value="INR">INR</option><option value="AUD">AUD</option><option value="HKD">HKD</option><option value="EUR">EUR</option>
                                          
                                              @else
                                          <option selected disabled value="">Currency</option>
                                          <option value="MYR">MYR</option><option value="SGD">SGD</option><option value="USD">USD</option><option value="INR">INR</option><option value="AUD">AUD</option><option value="HKD">HKD</option><option value="EUR">EUR</option>
                                          @endif
                                      </select>
                                   </div>
                                  <div class="col-xs-7">
                                      <input class="form-control" id="salary" name="salary" type="number" pattern="[0-9]*" min="0" value='{{{@$prv5->salary}}}'>
                                  </div>
                              </div>
                             </div>
                       </div>
                          <div class="col-sm-6 parent-box top-row ">
                                 <div class="row">
                                     <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Prefered Work Location</label>
                                     <div class="col-xs-12">                                    
                                         <select class="form-control" name="prefered_location">
                                             @if(isset($prv5->preferred_location))                                                        
                                              <option selected value="{{{$prv5->preferred_location}}}" >{{{$prv5->preferred_location}}}</option>
                                          <option value="Afghanistan">Afghanistan</option>
                                              <option value="Albania">Albania</option>
                                              <option value="Algeria">Algeria</option>
                                              <option value="American Samoa">American Samoa</option>
                                              <option value="Andorra">Andorra</option>
                                              <option value="Angola">Angola</option>
                                              <option value="Australia">Australia</option>
                                              <option value="Austria">Austria</option>
                                               <option value="Bhutan">Bhutan</option>
                                              <option value="Canada">Canada</option>
                                              <option value="Egypt">Egypt</option>
                                              <option value="Finland">Finland</option>
                                              <option value="France">France</option>
                                              <option value="Malaysia">Malaysia</option>
                                              <option value="Maldives">Maldives</option>
                                              @else
                                             <option selected disabled value="">- Select Location -</option>
                                              <option value="Afghanistan">Afghanistan</option>
                                              <option value="Albania">Albania</option>
                                              <option value="Algeria">Algeria</option>
                                              <option value="American Samoa">American Samoa</option>
                                              <option value="Andorra">Andorra</option>
                                              <option value="Angola">Angola</option>
                                              <option value="Australia">Australia</option>
                                              <option value="Austria">Austria</option>
                                               <option value="Bhutan">Bhutan</option>
                                              <option value="Canada">Canada</option>
                                              <option value="Egypt">Egypt</option>
                                              <option value="Finland">Finland</option>
                                              <option value="France">France</option>
                                              <option value="Malaysia">Malaysia</option>
                                              <option value="Maldives">Maldives</option>
                                              @endif
                                         </select>
                                         <!--<div class="col-xs-2"><input type="checkbox">I Want to work in any location</div>-->
                                     </div>
                                    
                                 </div>
                               </div>
                          <div class="form-group">
                              <div class="col-sm-12 parent-box top-row ">
                                 <div class="row">
                                     <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_dob" aria-required="true">Career Objective </label>
                                     <div class="col-xs-12">                                    
                                         <div class="col-sm-12">
                                           <textarea class="form-control" id="add_information" name="add_information" index="1" rows="10" value='{{{@$prv5->add_information}}}'>{{{@$prv5->add_information}}}</textarea>
                                          </div>
                                     </div>
                                    
                                 </div>
                               </div>
                            </div>
                          <div class="form-group">
                           <div class="col-sm-6 parent-box ">
                               <div class="row">
                                   <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Upload Other Supportive Document</label>
                                   <div class="col-xs-12">
                                       <input class="form-control" name="sdocument" type="file" >
                                    </div>
                               </div>
                           </div>
                       </div>
                      <div class="form-group">
                            <div class="col-sm-12 parent-box ">
                                         <div class="row">
                                              <div class="col-xs-12">
                                                  <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true"></label>
                                            
                              <input type="submit" class="btn btn-success btn-md" value="save and continue">
                                              </div></div></div></div>
                                              {!! Form::close() !!}
                      </div>
                      <!-- upload-section -->
                      <div class="tab-pane fade {{{ isset($state) ? ($state == 7) ? 'active in' : '' : ''}}}" id="upload-pills">
                        {!! Form::open(['route' => 'resume.store', 'id' => 'sign_up','class' => '','method'=> 'POST', 'files' => true]) !!}
                        <input type="hidden" name="level" value='7'>
                        <input type="hidden" name="resumeId" value="{{{ isset($id) ? $id : '0' }}}">
                         <?php            
                                        if(isset($id))
                                        $prv6= DB::table('uploadinformation')->where('pid',$id)->first();
                                        ?> 
                       <div class="form-group">
                           <div class="col-sm-6 parent-box ">
                               <div class="row">
                                  
                                   <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Upload your Resume </label>
                             
                                   <div class="col-xs-6">
                                       <input class="form-control" name="uresume" type="file" >
                                       </div>
                                      @if ($errors->has('uresume')) <p class="help-block">{{ $errors->first('uresume') }}</p> @endif
                                       @if(@$prv6->uresume!='')
                                       <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true">Previous Resume </label>
                                       <?php $path=url().'/upload/'.$prv6->uresume;?>
                                        <div class="col-xs-6">
                                       <a href="{{url()}}/upload/{{$prv6->uresume}}">{{$prv6->uresume}}</a>
                                        </div>
                                       @if(file_exists($path))
<!--                                        <div class="col-xs-12">
                                       <a href="{{url()}}/upload/{{$prv6->uresume}}">{{$prv6->uresume}}</a>
                                        </div>-->
                                       @endif
                                       @endif
                                 
                               </div>
                           </div>
                       </div>
                      <div class="form-group">
                            <div class="col-sm-12 parent-box ">
                                         <div class="row">
                                              <div class="col-xs-12">
                                                  <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true"></label>
                                            
                              <input type="submit" class="btn btn-success btn-md" value="save and continue">
                                              </div></div></div></div> 
                                              {!! Form::close() !!} 
            </div>
                      <!-- privacy-section -->
                      <div class="tab-pane fade {{{ isset($state) ? ($state == 8) ? 'active in' : '' : ''}}}" id="privacy-pills">
                       {!! Form::open(['route' => 'resume.store', 'id' => 'sign_up','class' => '']) !!}
                       <input type="hidden" name="level" value='8'>
                       <input type="hidden" name="resumeId" value="{{{ isset($id) ? $id : '0' }}}"> 
                       <?php            
                                        if(isset($id))
                                        $prv7= DB::table('privacyinformation')->where('pid',$id)->first();
                                        ?> 
                      <input name="privacy" type="radio"  value="1" <?php if(@$prv7->privacy){echo (@$prv7->privacy==1)?"checked":"" ;}?> required >Searchable with contact Details
                       <input name="privacy" type="radio" value="0" <?php if(@$prv7->privacy){echo (@$prv7->privacy==0)?"checked":"" ;}?> required >No Searchable
                                     
                        <div class="form-group">
                            <div class="col-sm-12 parent-box ">
                                         <div class="row">
                                              <div class="col-xs-12">
                                                  <label class="col-xs-12 control-label custom-control-label required c-text-left" id="lbl_email" aria-required="true"></label>
                                            
                          <button type="submit" class="btn btn-primary">Submit</button>               
                          </div></div></div></div> 
                          {!! Form::close() !!}    
            </div> 
                      <!-- privacy-section end--> 
                  </div>
              
             </div>
                  <!-- <input type="submit" name="submit" class="btn btn-success btn-md" role="button"> -->
              
           



              <!-- /.panel-body -->

          </div>
          <!-- /.panel -->

      </div>
                        
                        
    </div>
   
                           
</div>
@endsection
