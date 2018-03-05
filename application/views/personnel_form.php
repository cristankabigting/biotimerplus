<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>BioTimer</title>
    </head>

    <body>

        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption caption-md">
                                        <i class="icon-globe theme-font hide"></i>
                                        <span class="caption-subject font-blue-madison bold uppercase">201 FORM</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_1" data-toggle="tab">Account Info</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_2" data-toggle="tab">Rates Table</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_3" data-toggle="tab">Manual Entry</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_4" data-toggle="tab">Adjustments</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_5" data-toggle="tab">Summary</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_6" data-toggle="tab">Logs</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1_1">
                                            <form id="form201" action="#">

                                                <div clas="row">
                                                    <div class="col-md-3">
                                                        <button id="btnGetEmployeeData" style="width:100%;" type="button" class="btn green-jungle ladda-button" data-style="expand-right">
                                                            <span class="ladda-label">Get Record</span>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button id="btnSave" style="width:100%;" type="button" class="btn btn-primary ladda-button" data-style="expand-right">
                                                            <span class="ladda-label">Save Changes</span>
                                                        </button>                                                        
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button id="btnClear" style="width:100%;" type="reset" class="btn btn-danger ladda-button" data-style="expand-right">
                                                            <span class="ladda-label">Clear Fields</span>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button id="btnCalc" style="width:100%;" type="button" class="btn btn-success ladda-button" data-style="expand-right">
                                                            <span class="ladda-label">Rates</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div clas="row">&nbsp;</div>
                                                <div clas="row">
                                                    <div class="form-group">
                                                        <label class="control-label">Employee:</label>
                                                        <select id="201_dropdown_employeecode" class="bs-select form-control"></select>
                                                    </div>                           
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">ID Number</label>
                                                            <input name="employeecode" id="employeecode" type="text" placeholder="" class="form-control" maxlength="15" /> 
                                                        </div>                                                        
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">First Name</label>
                                                            <input name="employeefirst" id="employeefirst" type="text" placeholder="" class="form-control" maxlength="20" /> 
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Last Name</label>
                                                            <input name="employeelast" id="employeelast" type="text" placeholder="" class="form-control" maxlength="20"/> 
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Middle Name</label>
                                                            <input name="employeemiddle" id="employeemiddle" type="text" placeholder="" class="form-control" maxlength="20"/> 
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Phone Number</label>
                                                            <input name="phone" id="phone" type="text" placeholder="" class="form-control" maxlength="40"/> 
                                                        </div>                                                        
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Email Address</label>
                                                            <input name="email" id="email" type="email" placeholder="" class="form-control" maxlength="60" /> 
                                                        </div>                                                        
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Residential Address</label>
                                                            <input name="address" id="address" type="text" placeholder="" class="form-control" /> 
                                                        </div>                                                        
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Contact Person</label>
                                                            <input name="contactperson" id="contactperson" type="text" placeholder="" class="form-control" /> 
                                                        </div>
                                                    </div>                                                    

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Contact Number</label>
                                                            <input name="contactnumber" id="contactnumber" type="text" placeholder="" class="form-control" /> 
                                                        </div>
                                                    </div>                                                    

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Username</label>
                                                            <input name="username" id="username" type="text" placeholder="" class="form-control" maxlength="20" /> 
                                                        </div>                                                        
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Password</label>
                                                            <input name="userpass" id="userpass" type="text" placeholder="" class="form-control" maxlength="20" /> 
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Project</label>
                                                            <select name="project" id="project" class="bs-select form-control"></select>
                                                        </div>                                                        
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Department</label>
                                                            <select name="groupname" id="groupname" class="bs-select form-control"></select>
                                                        </div>                                                        
                                                    </div>
                                                    
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Employee Category</label>
                                                            <select name="employmentcategory" id="employmentcategory" class="bs-select form-control"></select>
                                                        </div>                                                        
                                                    </div>
                                                    
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Designation</label>
                                                            <select name="designation" id="designation" class="bs-select form-control"></select>
                                                        </div>                                                        
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Basic Salary Type</label>
                                                            <select name="salarytype" id="salarytype" class="bs-select form-control">
                                                                <option value=""></option>
                                                                <option value="Monthly">Monthly</option>
                                                                <option value="Semi-Monthly">Semi-Monthly</option>
                                                                <option value="Weekly">Weekly</option>
                                                                <option value="Daily">Daily</option>
                                                            </select>
                                                        </div>                                                        
                                                    </div>
                                                    
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Payroll Cut-Off</label>
                                                            <select name="payrollcutoff" id="payrollcutoff" class="bs-select form-control">
                                                                <option value=""></option>
                                                                <option value="Sunday">Sunday</option>
                                                                <option value="Tuesday">Tuesday</option>
                                                                <option value="Semi-Monthly">Semi-Monthly</option>
                                                            </select>
                                                        </div>                                                        
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Payroll Frequency</label>
                                                            <select name="payrollfrequency" id="payrollfrequency" class="bs-select form-control">
                                                                <option value=""></option>
                                                                <option value="Weekly">Weekly</option>
                                                                <option value="Semi-Monthly">Semi-Monthly</option>
                                                            </select>
                                                        </div>                                                        
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Employment Status</label>
                                                            <select name="employmentstatus" id="employmentstatus" class="bs-select form-control">
                                                                <option value=""></option>
                                                                <option value="Employed">Employed</option>
                                                                <option value="Suspended">Suspended</option>
                                                                <option value="Terminated">Terminated</option>
                                                            </select>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Basic Salary</label>
                                                            <input name="basicsalary" id="basicsalary" type="text" value="0.00" placeholder="" class="form-control" maxlength="12" /> 
                                                        </div>                                                        
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Allowances</label>
                                                            <input name="allowances" id="allowances" type="text" value="0.00" placeholder="" class="form-control" maxlength="12" /> 
                                                        </div>                                                        
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">ATM Account Number </label>
                                                            <input name="accountnumber" id="accountnumber" type="text" placeholder="" class="form-control" maxlength="15" /> 
                                                        </div>                                                        
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">ATM Account Name </label>
                                                            <input name="accountname" id="accountname" type="text" placeholder="" class="form-control" maxlength="40" /> 
                                                        </div>                                                        
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">TIN</label>
                                                            <input name="tin_number" id="tin_number" type="text" placeholder="" class="form-control" maxlength="15" /> 
                                                        </div>                                                        
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">SSS Number</label>
                                                            <input name="sss_number" id="sss_number" type="text" placeholder="" class="form-control" maxlength="12" /> 
                                                        </div>                                                        
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">PhilHealth Number</label>
                                                            <input name="phic_number" id="phic_number" type="text" placeholder="" class="form-control" maxlength="14" /> 
                                                        </div>                                                        
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">PAG-IBIG Number</label>
                                                            <input name="hdmf_number" id="hdmf_number" type="text" placeholder="" class="form-control" maxlength="14" /> 
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Hire Date</label>
                                                            <div class="input-group date date-picker">
                                                                <input name="hiredate" id="hiredate" type="text" class="form-control" readonly>
                                                                <span class="input-group-btn">
                                                                    <button class="btn default date-set" type="button">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Last Suspension Date</label>
                                                            <div class="input-group date date-picker">
                                                                <input name="suspensiondate" id="suspensiondate" type="text" class="form-control" readonly>
                                                                <span class="input-group-btn">
                                                                    <button class="btn default date-set" type="button">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Termination Date</label>
                                                            <div class="input-group date date-picker">
                                                                <input name="terminationdate" id="terminationdate" type="text" class="form-control" readonly>
                                                                <span class="input-group-btn">
                                                                    <button class="btn default date-set" type="button">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Final Pay Date</label>
                                                            <div class="input-group date date-picker">
                                                                <input name="finalpayreleasedate" id="finalpayreleasedate" type="text" class="form-control" readonly>
                                                                <span class="input-group-btn">
                                                                    <button class="btn default date-set" type="button">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </form>
                                        </div>
                                        <div class="tab-pane" id="tab_1_2">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row"><div class="col-md-12 font-blue">Regular Rates</div></div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-6">Monthly Rate:</div><div class="col-md-6 text-right" id="monthlyrate"></div>
                                                            <div class="col-md-6">Semi-Monthly Rate:</div><div class="col-md-6 text-right" id="semimonthlyrate"></div>
                                                            <div class="col-md-6">Weekly Rate:</div><div class="col-md-6 text-right" id="weeklyrate"></div>
                                                            <div class="col-md-6">Daily Rate:</div><div class="col-md-6 text-right" id="dailyrate"></div>
                                                            <div class="col-md-6">Hourly Rate:</div><div class="col-md-6 text-right" id="hourlyrate"></div>
                                                            <div class="col-md-6">Minute Rate:</div><div class="col-md-6 text-right" id="minuterate"></div>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                            </div>
                                            <div class="row">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                   <div class="row"><div class="col-md-6 font-green">Regular Time Rates</div></div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-6">Regular Day Pay per Hour:</div><div class="col-md-6 text-right" id="regular_pay_rate"></div>
                                                            <div class="col-md-6">Rest Day Pay per Hour:</div><div class="col-md-6 text-right" id="restday_pay_rate"></div>
                                                            <div class="col-md-6">Legal Holiday Pay per Hour:</div><div class="col-md-6 text-right" id="legal_holiday_pay_rate"></div>
                                                            <div class="col-md-6">Special Holiday Pay per Hour:</div><div class="col-md-6 text-right" id="special_holiday_pay_rate"></div>
                                                            <div class="col-md-6">Legal + Rest Day Pay per Hour:</div><div class="col-md-6 text-right" id="legal_holiday_restday_pay_rate"></div>
                                                            <div class="col-md-6">Special + Rest Day Pay per Hour:</div><div class="col-md-6 text-right" id="special_holiday_restday_pay_rate"></div>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="row"><div class="col-md-6 font-red">Over Time Rates</div></div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-6">Regular Day OT per Hour:</div><div class="col-md-6 text-right" id="regular_ot_rate"></div>
                                                            <div class="col-md-6">Rest Day OT per Hour:</div><div class="col-md-6 text-right" id="restday_ot_rate"></div>
                                                            <div class="col-md-6">Legal Holiday OT per Hour:</div><div class="col-md-6 text-right" id="legal_holiday_ot_rate"></div>
                                                            <div class="col-md-6">Special Holiday OT per Hour:</div><div class="col-md-6 text-right" id="special_holiday_ot_rate"></div>
                                                            <div class="col-md-6">Legal + Rest Day OT per Hour:</div><div class="col-md-6 text-right" id="legal_holiday_restday_ot_rate"></div>
                                                            <div class="col-md-6">Special + Rest Day OT per Hour:</div><div class="col-md-6 text-right" id="special_holiday_restday_ot_rate"></div>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab_1_3">
                                            <form id="manualformentry" action="#">    
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Code:</label>
                                                            <input name="manual_entry_employeecode" id="manual_entry_employeecode" type="text" placeholder="" class="form-control" maxlength="12" readonly />                                                         
                                                        </div>
                                                    </div>                                                    
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="control-label">Employee:</label>
                                                            <select id="manual_entry_dropdown_employeecode" class="bs-select form-control"></select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">&nbsp;</div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-6 font-blue">ADJUSTMENT ENTRY</div>
                                                        </div>
                                                        <hr>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Period Start</label>
                                                                <input name="periodstart" id="periodstart" type="text" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Period End</label>
                                                                <input name="periodend" id="periodend" type="text" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Income</label>
                                                                <select name="manual_entry_dropdown_incometype" id="manual_entry_dropdown_incometype" class="bs-select form-control">
                                                                    <option></option>
                                                                    <option value="RGRT">Regular Work Regular Time</option>
                                                                    <option value="RDRT">Restday Work Regular Time</option>
                                                                    <option value="LHRT">Legal Holiday Work Regular Time</option>
                                                                    <option value="SHRT">Special Non Working Holiday Work Regular Time</option>
                                                                    <option value="LRRT">Legal and Restday Work Regular Time</option>
                                                                    <option value="SRRT">Special and Restday Work Regular Time</option>
                                                                    <option value="RGOT">Regular Work Over Time</option>
                                                                    <option value="RDOT">Restday Work Over Time</option>
                                                                    <option value="LHOT">Legal Holiday Work Over Time</option>
                                                                    <option value="SHOT">Special Non Working Holiday Work Over Time</option>
                                                                    <option value="LROT">Legal and Restday Work Over Time</option>
                                                                    <option value="SROT">Special and Restday Work Over Time</option>
                                                                    <option value="DALL">Daily Allowance</option>
                                                                    <option value="FALL">Fixed Allowance</option>
                                                                    <option value="BONS">Bonus</option>
                                                                    <option value="INCS">Incentives</option>
                                                                    <option value="M13F"">13th Month Full</option>
                                                                    <option value="M13P">13th Month Partial</option>
                                                                </select>
                                                            </div>                                                        
                                                        </div>                                                
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Deduction</label>
                                                                <select name="manual_entry_dropdown_deductiontype" id="manual_entry_dropdown_deductiontype" class="bs-select form-control">
                                                                    <option></option>
                                                                    <option value="SSSC">SSS</option>
                                                                    <option value="PHIC">PHIC</option>
                                                                    <option value="HDMF">HDMF</option>
                                                                    <option value="CSAD">Cash Advance</option>
                                                                    <option value="LDED">Late</option>
                                                                    <option value="UDED">Undertime</option>
                                                                </select>
                                                            </div>                                                        
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Unit</label>
                                                                <input name="manual_entry_work_hours" id="manual_entry_work_hours" type="text" class="form-control">
                                                            </div>
                                                        </div>                                                    
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Amount</label>
                                                                <input name="manual_entry_amount" id="manual_entry_amount" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Comment</label>
                                                                <input name="manual_entry_comment" id="manual_entry_comment" maxlength="80" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button id="btnProcessIncomeUsingHours" style="width:100%;" type="button" class="btn green-jungle">
                                                                <span class="control-label">PROCESS INCOME USING UNIT</span>
                                                            </button>                                                                                                        
                                                        </div>                                                                                                        
                                                        <div class="col-md-6">
                                                            <button id="btnProcessIncomeUsingAmount" style="width:100%;" type="button" class="btn blue-madison">
                                                                <span class="control-label">PROCESS INCOME USING AMOUNT</span>
                                                            </button>                                                                                                        
                                                        </div>
                                                        <div class="col-md-12">&nbsp;</div>                                                                                                        
                                                        <div class="col-md-6">
                                                            <button id="btnProcessDeductionUsingHours" style="width:100%;" type="button" class="btn green-jungle">
                                                                <span class="control-label">PROCESS DEDUCTION USING UNIT</span>
                                                            </button>                                                                                                        
                                                        </div>
                                                        <div class="col-md-6">                                                                                                        
                                                            <button id="btnProcessDeductionUsingAmount" style="width:100%;" type="button" class="btn blue-madison">
                                                                <span class="control-label">PROCESS DEDUCTION USING AMOUNT</span>
                                                            </button>                                                                                                        
                                                        </div>                                                                                                        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-6 font-blue">LOG ENTRY</div>
                                                        </div>
                                                        <hr>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Log ID</label>
                                                                <input name="manual_entry_logid" id="manual_entry_logid" type="text" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Log Date</label>
                                                                <div class="input-group date date-picker">
                                                                    <input name="manual_entry_logdate" id="manual_entry_logdate" type="text" class="form-control" readonly>
                                                                    <span class="input-group-btn">
                                                                        <button class="btn default date-set" type="button">
                                                                            <i class="fa fa-calendar"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Log In</label>
                                                                <div class="input-group date form_meridian_datetime">
                                                                    <input name="manual_entry_login" id="manual_entry_login" type="text" size="16" class="form-control" maxlenght="20">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn default date-reset" type="button">
                                                                            <i class="fa fa-times"></i>
                                                                        </button>
                                                                        <button class="btn default date-set" type="button">
                                                                            <i class="fa fa-calendar"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Log Out</label>
                                                                <div class="input-group date form_meridian_datetime">
                                                                    <input name="manual_entry_logout" id="manual_entry_logout" type="text" size="16" class="form-control" maxlenght="20">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn default date-reset" type="button">
                                                                            <i class="fa fa-times"></i>
                                                                        </button>
                                                                        <button class="btn default date-set" type="button">
                                                                            <i class="fa fa-calendar"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Log Type</label>
                                                                <select name="manual_entry_dropdown_incometype_log" id="manual_entry_dropdown_incometype_log" class="bs-select form-control">
                                                                    <option></option>
                                                                    <option value="RGRT">Regular Work Regular Time</option>
                                                                    <option value="RDRT">Restday Work Regular Time</option>
                                                                    <option value="LHRT">Legal Holiday Work Regular Time</option>
                                                                    <option value="SHRT">Special Non Working Holiday Work Regular Time</option>
                                                                    <option value="LRRT">Legal and Restday Work Regular Time</option>
                                                                    <option value="SRRT">Special and Restday Work Regular Time</option>
                                                                    <option value="RGOT">Regular Work Over Time</option>
                                                                    <option value="RDOT">Restday Work Over Time</option>
                                                                    <option value="LHOT">Legal Holiday Work Over Time</option>
                                                                    <option value="SHOT">Special Non Working Holiday Work Over Time</option>
                                                                    <option value="LROT">Legal and Restday Work Over Time</option>
                                                                    <option value="SROT">Special and Restday Work Over Time</option>
                                                                </select>
                                                            </div>                                                        
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label"></label>
                                                            <button id="btnLogTimeRecord" style="margin-top:5px;width:100%;" type="button" class="btn green-jungle">
                                                                <span class="control-label">LOG TIME RECORD</span>
                                                            </button>                                                                                                        
                                                        </div>    
                                                    </div>
                                                </div>
                                                <div class="row">&nbsp;</div>
                                                <div class="row">
                                                </div>
                                            </form>    
                                        </div>
                                        <div class="tab-pane" id="tab_1_4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div style="margin-bottom:25px;">
                                                        <button id="btnSummarizeAdjustment" style="width:240px;" type="button" class="btn green-jungle">
                                                            <span class="control-label">Summarize Selected Adjustment</span>
                                                        </button>                                                                                                        
                                                        <button id="btnDeleteAdjusment" style="width:240px;" type="button" class="btn red-thunderbird">
                                                            <span class="control-label">Delete Selected Adjustment</span>
                                                        </button>                                                                                                        
                                                    </div>                                                
                                                </div>    
                                                <div class="col-md-12">
                                                    <div class="col-md-12 font-blue">ADJUSTMENT ENTRIES</div>
                                                    <hr>
                                                    <div class="portlet light bordered">
                                                        <div class="portlet-body">
                                                            <table id="table-adjustments" data-toggle="table" data-height="100%" data-pagination="true" data-search="true">
                                                                <thead>
                                                                    <tr>
                                                                        <th data-field="state" data-checkbox="true"></th>
                                                                        <th data-field="summarized" data-align="left" data-sortable="true">Summarized</th>
                                                                        <!--
                                                                        <th data-field="adjustmentid" data-align="left" data-sortable="true">ID</th>
                                                                        -->
                                                                        <th data-field="periodstart" data-align="left" data-sortable="true">Period Start</th>
                                                                        <th data-field="periodend" data-align="left" data-sortable="true">Period End</th>
                                                                        <!--
                                                                        <th data-field="project" data-align="left" data-sortable="true">Project</th>
                                                                        <th data-field="employeecode" data-align="left" data-sortable="false">Emp. Code</th>
                                                                        <th data-field="employeefirst" data-align="left" data-sortable="true">Firstname</th>
                                                                        <th data-field="employeelast" data-align="left" data-sortable="true">Lastname</th>
                                                                        -->
                                                                        <th data-field="particular" data-align="left" data-sortable="true">Particular</th>
                                                                        <!--
                                                                        <th data-field="comment" data-align="left" data-sortable="false">Comment</th>
                                                                        <th data-field="hours" data-align="left" data-sortable="false">Hours</th>
                                                                        -->
                                                                        <th data-field="income" data-align="right" data-sortable="false">Income</th>
                                                                        <th data-field="deduction" data-align="right" data-sortable="false">Deduction</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="tab-pane" id="tab_1_5">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div style="margin-bottom:25px;">
                                                        <button id="btnExportExcel" style="width:240px;" type="button" class="btn green-jungle">
                                                            <span class="control-label">Export Summary to Excel</span>
                                                        </button>                                                                                                        
                                                    </div>                                                
                                                </div>    
                                                <div class="col-md-12">
                                                    <div class="col-md-12 font-blue">PAYROLL SUMMARY</div>
                                                    <hr>
                                                    <div class="portlet light bordered">
                                                        <div class="portlet-body">
                                                            <table id="table-summary" data-url="<?php echo base_url("personnel/getPayrollSummary");?>" data-toggle="table" data-height="200" data-pagination="true" data-search="true">
                                                                <thead>
                                                                    <tr>
                                                                        <th data-field="state" data-checkbox="true"></th>
                                                                        <th data-field="summaryid" data-align="left" data-sortable="true">ID</th>
                                                                        <th data-field="periodstart" data-align="left" data-sortable="true">Period Start</th>
                                                                        <th data-field="periodend" data-align="left" data-sortable="true">Period End</th>
                                                                        <th data-field="project" data-align="left" data-sortable="true">Project</th>
                                                                        <th data-field="employeecode" data-align="left" data-sortable="true">Emp. Code</th>
                                                                        <th data-field="employeefirst" data-align="left" data-sortable="true">Firstname</th>
                                                                        <th data-field="employeelast" data-align="left" data-sortable="true">Lastname</th>
                                                                        <th data-field="income" data-align="right" data-sortable="true">Income</th>
                                                                        <th data-field="deduction" data-align="right" data-sortable="true">Deduction</th>
                                                                        <th data-field="netpay" data-align="right" data-sortable="true">Net Pay</th>
                                                                        <th data-field="allowance" data-align="right" data-sortable="true">Allowance</th>
                                                                        <th data-field="regularpay" data-align="right" data-sortable="true">Regular Pay</th>
                                                                        <th data-field="sundaypay" data-align="right" data-sortable="true">Sunday Pay</th>
                                                                        <th data-field="holidaypay" data-align="right" data-sortable="true">Holiday Pay</th>
                                                                        <th data-field="regularot" data-align="right" data-sortable="true">Regular OT</th>
                                                                        <th data-field="sundayot" data-align="right" data-sortable="true">Sunday OT</th>
                                                                        <th data-field="holidayot" data-align="right" data-sortable="true">Holiday OT</th>
                                                                        <th data-field="tm" data-align="right" data-sortable="true">13th Month</th>
                                                                        <th data-field="otherincome" data-align="right" data-sortable="true">Other Income</th>
                                                                        <th data-field="sssc" data-align="right" data-sortable="true">SSS</th>
                                                                        <th data-field="phic" data-align="right" data-sortable="true">PHIC</th>
                                                                        <th data-field="hdmf" data-align="right" data-sortable="true">HDMF</th>
                                                                        <th data-field="lded" data-align="right" data-sortable="true">Late</th>
                                                                        <th data-field="uded" data-align="right" data-sortable="true">U/T</th>
                                                                        <th data-field="csad" data-align="right" data-sortable="true">Cash Adv.</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="tab-pane" id="tab_1_6">
                                            <form id="form-logs" action="#">
                                                <div class="row">
                                                   <div class="col-md-12">
                                                        <div style="margin-bottom:25px;">
                                                            <button id="btnEditLog" style="width:240px;" type="button" class="btn blue-hoki">
                                                                <span class="control-label">Edit Selected Log</span>
                                                            </button>
                                                            <button id="btnDeleteLog" style="width:240px;" type="button" class="btn red-thunderbird">
                                                                <span class="control-label">Delete Selected Logs</span>
                                                            </button>
                                                            <button id="btnProcessLog" style="width:240px;" type="button" class="btn green-jungle">
                                                                <span class="control-label">Process Selected Logs</span>
                                                            </button>
                                                        </div>                                                
                                                    </div>    
                                                    <div class="col-md-12">
                                                        <div class="col-md-12 font-blue">LOG ENTRIES</div>
                                                        <hr>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Period Start</label>
                                                                <input name="log_periodstart" id="log_periodstart" type="text" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Period End</label>
                                                                <input name="log_periodend" id="log_periodend" type="text" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="portlet light bordered">
                                                            <div class="portlet-body">
                                                                <table id="table-logs" data-toggle="table" data-height="299" data-pagination="true" data-search="true">
                                                                    <thead>
                                                                        <tr>
                                                                            <th data-field="state" data-checkbox="true"></th>
                                                                            <th data-field="processed" data-align="left" data-sortable="true">Processed</th>
                                                                            <th data-field="periodstart" data-align="left" data-sortable="true">Period<br>Start</th>
                                                                            <th data-field="logdate" data-align="left" data-sortable="true">Log<br>Date</th>
                                                                            <th data-field="periodend" data-align="left" data-sortable="true">Period<br>End</th>
                                                                            <th data-field="particular" data-align="left" data-sortable="true">Log<br>Type</th>
                                                                            <th data-field="login" data-align="left" data-sortable="true">Login<br>Time</th>
                                                                            <th data-field="logout" data-align="left" data-sortable="true">Logout<br>Time</th>
                                                                            <!--
                                                                            <th data-field="logid" data-align="left" data-sortable="true">ID</th>
                                                                            <th data-field="project" data-align="left" data-sortable="true">Project</th>
                                                                            <th data-field="employeecode" data-align="left" data-sortable="true">Employee<br>Code</th>
                                                                            <th data-field="employeefirst" data-align="left" data-sortable="true">Employee<br>Firstname</th>
                                                                            <th data-field="employeelast" data-align="left" data-sortable="true">Employee<br>Lastname</th>
                                                                            <th data-field="duration" data-align="left" data-sortable="true">Duration<br>(Hours)</th>
                                                                            <th data-field="logtype" data-align="left" data-sortable="true">Log Type</th>
                                                                            -->
                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PROFILE CONTENT -->
            </div>
        </div>
        
        <script>

            jQuery(document).ready(function(){

                var clearFields = function() {
                    $('#form201').trigger("reset");
                    $('#employeecode').attr('readonly',false);
                    handleMasks();
                    handleDropDown();
                    getDropDown();
                    calcRates();                
                }

                var handleMasks = function() {
                    $('#phone').inputmask({mask: '0999-999-999'});
                    $('#contactnumber').inputmask({mask: '0999-999-999'});
                    $('#tin_number').inputmask({mask: '999-999-999'});
                    $('#sss_number').inputmask({mask: '99-9999999-9'});
                    $('#phic_number').inputmask({mask: '99-999999999-9'});
                    $('#hdmf_number').inputmask({mask: '9999-9999-9999'});
                }

                var handleDropDown = function() {
                    $('#salarytype').select2({placeholder:'Select a Salary Type',width:null});
                    $('#payrollcutoff').select2({placeholder:'Select a Cut Off',width:null});
                    $('#payrollfrequency').select2({placeholder:'Select a Frequency',width:null});
                    $('#employmentstatus').select2({placeholder:'Select a Status',width:null});
                    $('#manual_entry_dropdown_incometype').select2({width:null});
                    $('#manual_entry_dropdown_incometype_log').select2({width:null});
                    $('#manual_entry_dropdown_deductiontype').select2({width:null});                
                }

                var getDropDown = function() {

                    $.post("<?php echo base_url("personnel/getProjects"); ?>",function(dropdown){
                        $('#project').html(dropdown);
                        $('#project').select2({placeholder:'Select a Project',width:null});
                    });

                    $.post("<?php echo base_url("personnel/getDepartment"); ?>",function(dropdown){
                        $('#groupname').html(dropdown);
                        $('#groupname').select2({placeholder:'Select a Department',width:null});
                    });

                    $.post("<?php echo base_url("personnel/getEmploymentCategory"); ?>",function(dropdown){
                        $('#employmentcategory').html(dropdown);
                        $('#employmentcategory').select2({placeholder:'Select a Category',width:null});
                    });

                    $.post("<?php echo base_url("personnel/getDesignation"); ?>",function(dropdown){
                        $('#designation').html(dropdown);
                        $('#designation').select2({placeholder:'Select a Designation',width:null});
                    });

                    $.post("<?php echo base_url("personnel/getEmployees"); ?>",function(dropdown){
                        $('#201_dropdown_employeecode').html(dropdown);
                        $('#201_dropdown_employeecode').select2({placeholder:'Select an Employee',width:null});
                        $('#manual_entry_dropdown_employeecode').html(dropdown);
                        $('#manual_entry_dropdown_employeecode').select2({placeholder:'Select an Employee',width:null});
                    });
                }

                var calcRates = function() {
                    var salarytype  = $('#salarytype').val();
                    var basicsalary = $('#basicsalary').val();
                    $.post("<?php echo base_url("personnel/calculate"); ?>",{salarytype:salarytype,basicsalary:basicsalary},function(data){
                        var obj = JSON.parse(data);
                        $('#monthlyrate').text(obj.monthlyrate);
                        $('#semimonthlyrate').text(obj.semimonthlyrate);
                        $('#weeklyrate').text(obj.weeklyrate);
                        $('#dailyrate').text(obj.dailyrate);
                        $('#hourlyrate').text(obj.hourlyrate);
                        $('#minuterate').text(obj.minuterate);

                        $('#regular_pay_rate').text(obj.regular_pay_rate);
                        $('#restday_pay_rate').text(obj.restday_pay_rate);
                        $('#legal_holiday_pay_rate').text(obj.legal_holiday_pay_rate);
                        $('#special_holiday_pay_rate').text(obj.special_holiday_pay_rate);
                        $('#legal_holiday_restday_pay_rate').text(obj.legal_holiday_restday_pay_rate);
                        $('#special_holiday_restday_pay_rate').text(obj.special_holiday_restday_pay_rate);

                        $('#regular_ot_rate').text(obj.regular_ot_rate);
                        $('#restday_ot_rate').text(obj.restday_ot_rate);
                        $('#legal_holiday_ot_rate').text(obj.legal_holiday_ot_rate);
                        $('#special_holiday_ot_rate').text(obj.special_holiday_ot_rate);
                        $('#legal_holiday_restday_ot_rate').text(obj.legal_holiday_restday_ot_rate);
                        $('#special_holiday_restday_ot_rate').text(obj.special_holiday_restday_ot_rate);
                    });                            
                }

                ////////////////

                var handleMessages = function() {
                    $.post("<?php echo base_url("regulartime/messagestatus"); ?>",function(html){
                        $('#staffstatus').html(html);
                    });
                }

                var handleDatePickers = function() {
                    // Calculations and Entries
                    $(".form_meridian_datetime").datetimepicker({
                        isRTL: App.isRTL(),
                        format: "yyyy-mm-dd HH:ii P",
                        showMeridian: true,
                        minuteStep: 1,
                        autoclose: true,
                        pickerPosition: (App.isRTL() ? "bottom-right" : "bottom-left"),
                        todayBtn: true,
                        weekStart: 1
                    });

                    $('#manual_entry_logdate').datepicker({
                        rtl: App.isRTL(),
                        format: "yyyy-mm-dd",
                        orientation: "left",
                        startDate: '-12d',
                        endDate: '+0d',
                        autoclose: true,
                        clearBtn: true,
                        weekStart: 1
                    });

                    $('#periodstart, #log_periodstart').datepicker({
                        rtl: App.isRTL(),
                        format: "yyyy-mm-dd",
                        orientation: "bottom left",
                        startDate: '-12d',
                        endDate: '+12d',
                        autoclose: true,
                        clearBtn: true,
                        weekStart: 1
                    });

                    $('#periodend, #log_periodend').datepicker({
                        rtl: App.isRTL(),
                        format: "yyyy-mm-dd",
                        orientation: "bottom left",
                        startDate: '-12d',
                        endDate: '+12d',
                        autoclose: true,
                        clearBtn: true,
                        weekStart: 1
                    });

                    $('#hiredate').datepicker({
                        rtl: App.isRTL(),
                        format: "yyyy-mm-dd",
                        orientation: "left",
                        startDate: '-15d',
                        endDate: '+15d',
                        autoclose: true,
                        clearBtn: true,
                        weekStart: 1
                    });

                    $('#terminationdate').datepicker({
                        rtl: App.isRTL(),
                        format: "yyyy-mm-dd",
                        orientation: "left",
                        startDate: '-30d',
                        endDate: '+30d',
                        autoclose: true,
                        clearBtn: true,
                        weekStart: 1
                    });

                    $('#suspensiondate').datepicker({
                        rtl: App.isRTL(),
                        format: "yyyy-mm-dd",
                        orientation: "left",
                        startDate: '-7d',
                        endDate: '+7d',
                        autoclose: true,
                        clearBtn: true,
                        weekStart: 1
                    });

                    $('#finalpayreleasedate').datepicker({
                        rtl: App.isRTL(),
                        format: "yyyy-mm-dd",
                        orientation: "left",
                        startDate: '-30d',
                        endDate: '+30d',
                        autoclose: true,
                        clearBtn: true,
                        weekStart: 1
                    });
                }

                var handleButtons = function() {

                    Ladda.bind('#btnSave', {
                        callback: function( instance ) {
                            var progress = 0;
                            var interval = setInterval( function() {
                                progress = Math.min( progress + Math.random() * 0.1, 1 );
                                instance.setProgress( progress );

                                if( progress === 1 ) {
                                    instance.stop();
                                    clearInterval( interval );
                                    var data = $('#form201').serialize();
                                    $.post("<?php echo base_url("personnel/saveEmployeeData"); ?>",{data:data},function(){
                                        clearFields();
                                    });
                                }
                            }, 100 );
                        }
                    });

                    Ladda.bind('#btnGetEmployeeData', {
                        callback: function( instance ) {

                            var progress = 0;
                            var interval = setInterval( function() {
                                progress = Math.min( progress + Math.random() * 0.1, 1 );
                                instance.setProgress( progress );

                                if( progress === 1 ) {
                                    instance.stop();
                                    clearInterval( interval );
                                    var employeecode = $('#employeecode').val();
                                    $.post("<?php echo base_url("personnel/getEmployeeData"); ?>",{employeecode:employeecode},function(data){
                                        
                                        obj = JSON.parse(data);

                                        $('#employeecode').val(obj.employeecode);
                                        $('#employeefirst').val(obj.employeefirst);
                                        $('#employeelast').val(obj.employeelast);
                                        $('#employeemiddle').val(obj.employeemiddle);

                                        $('#phone').val(obj.phone);
                                        $('#email').val(obj.email);
                                        $('#address').val(obj.address);

                                        $('#contactperson').val(obj.contactperson);
                                        $('#contactnumber').val(obj.contactnumber);
                                        $('#username').val(obj.username);
                                        $('#userpass').val(obj.userpass);

                                        $('#project').val(obj.project).trigger('change');
                                        $('#groupname').val(obj.groupname).trigger('change');
                                        $('#employmentcategory').val(obj.employmentcategory).trigger('change');
                                        $('#designation').val(obj.designation).trigger('change');

                                        $('#salarytype').val(obj.salarytype).trigger('change');
                                        $('#payrollcutoff').val(obj.payrollcutoff).trigger('change');
                                        $('#payrollfrequency').val(obj.payrollfrequency).trigger('change');
                                        $('#employmentstatus').val(obj.employmentstatus).trigger('change');

                                        //$('#entrybasicsalary,#basicsalary').val(obj.basicsalary);
                                        $('#basicsalary').val(obj.basicsalary);
                                        $('#allowances').val(obj.allowances);
                                        $('#accountnumber').val(obj.accountnumber);
                                        $('#accountname').val(obj.accountname);

                                        $('#tin_number').val(obj.tin_number);
                                        $('#sss_number').val(obj.sss_number);
                                        $('#phic_number').val(obj.phic_number);
                                        $('#hdmf_number').val(obj.hdmf_number);

                                        $('#hiredate').val(obj.hiredate);
                                        $('#suspensiondate').val(obj.suspensiondate);
                                        $('#terminationdate').val(obj.terminationdate);
                                        $('#finalpayreleasedate').val(obj.finalpayreleasedate);

                                        $('#employeecode').attr('readonly',true);

                                        calcRates();
                                    });

                                }
                            }, 1);
                        }
                    });

                    Ladda.bind('#btnCalc', {
                        callback: function( instance ) {
                            var progress = 0;
                            var interval = setInterval( function() {
                                progress = Math.min( progress + Math.random() * 0.1, 1 );
                                instance.setProgress( progress );

                                if( progress === 1 ) {
                                    instance.stop();
                                    clearInterval( interval );
                                    calcRates();
                                }
                            }, 1 );
                        }
                    });

                    Ladda.bind('#btnClear', {
                        callback: function( instance ) {

                            var progress = 0;
                            var interval = setInterval( function() {
                                progress = Math.min( progress + Math.random() * 0.1, 1 );
                                instance.setProgress( progress );

                                if( progress === 1 ) {
                                    instance.stop();
                                    clearInterval( interval );
                                    clearFields();
                                }
                            }, 1);
                        }
                    });
                }

                var handleChanges = function() {
                    $('#201_dropdown_employeecode').change(function(){
                        $('#employeecode').val($(this).val());
                        $('#btnGetEmployeeData').trigger('click');
                    });

                    $('#manual_entry_dropdown_employeecode').change(function(){
                        employeecode = $(this).val();
                        $('#manual_entry_employeecode').val(employeecode);
                        getEmployeeAdjustments(employeecode);
                        getEmployeeLogs(employeecode);
                    });
                }

                var handleTables = function() {
                    $('#table-logs').bootstrapTable();
                    $('#table-adjustments').bootstrapTable();
                    $('#table-summary').bootstrapTable();
                }

                var getAllAdjustments = function() {
                    $.getJSON("<?php echo base_url("personnel/getManualAdjustments"); ?>",function(data){
                        $('#table-adjustments').bootstrapTable({data:data});
                        $('#table-adjustments').bootstrapTable('load',data);
                        $('#table-adjustments').bootstrapTable('refresh');
                    });                
                }

                var getEmployeeAdjustments = function(employeecode) {
                    $.getJSON("<?php echo base_url("personnel/getEmployeeAdjustments"); ?>",{employeecode:employeecode},function(data){
                        $('#table-adjustments').bootstrapTable({data:data});
                        $('#table-adjustments').bootstrapTable('load',data);
                        $('#table-adjustments').bootstrapTable('refresh');
                    });                
                }

                var getEmployeeLogs = function(employeecode) {
                    $.getJSON("<?php echo base_url("personnel/getEmployeeLogs"); ?>",{employeecode:employeecode},function(data){
                        $('#table-logs').bootstrapTable({data:data});
                        $('#table-logs').bootstrapTable('load',data);
                        $('#table-logs').bootstrapTable('refresh');
                    });                
                }

                var processIncomeUsingHours = function() {
                    $('#btnProcessIncomeUsingHours').click(function(){
                        if ($('#periodstart').val() && $('#periodend').val() && $('#manual_entry_employeecode').val() && $('#manual_entry_dropdown_incometype').val() && $('#manual_entry_work_hours').val()) {
                            
                            var data = {
                                'employeecode'  : $('#manual_entry_employeecode').val(),
                                'periodstart'   : $('#periodstart').val(),
                                'periodend'     : $('#periodend').val(),
                                'adjustmentcode': $('#manual_entry_dropdown_incometype').val(),
                                'particular'    : $('#manual_entry_dropdown_incometype option:selected').text(),
                                'comment'       : $('#manual_entry_comment').val(),
                                'hours'         : $('#manual_entry_work_hours').val()
                            };
                            $.post("<?php echo base_url("personnel/processIncomeUsingHours"); ?>",{data:data},function(result){
                                if(result == 'OK') {
                                    alert('done');
                                    $('#manual_entry_comment').val('');
                                    $('#manual_entry_work_hours').val('');
                                    $('#manual_entry_dropdown_incometype').val('').trigger('change');
                                    getEmployeeAdjustments($('#manual_entry_employeecode').val());
                                } else {
                                    alert(result);
                                }

                            });

                        } else {

                            alert('Error: You need to enter the following information: Employee, Period Start and End, Income, and Unit');
                        }
                    });
                }

                var processIncomeUsingAmount = function() {
                    $('#btnProcessIncomeUsingAmount').click(function(){
                        if ($('#periodstart').val() && $('#periodend').val() && $('#manual_entry_employeecode').val() && $('#manual_entry_dropdown_incometype').val() && $('#manual_entry_amount').val()) {
                            var data = {
                                'employeecode'  : $('#manual_entry_employeecode').val(),
                                'periodstart'   : $('#periodstart').val(),
                                'periodend'     : $('#periodend').val(),
                                'adjustmentcode': $('#manual_entry_dropdown_incometype').val(),
                                'particular'    : $('#manual_entry_dropdown_incometype option:selected').text(),
                                'comment'       : $('#manual_entry_comment').val(),
                                'income'        : $('#manual_entry_amount').val()
                            };
                            $.post("<?php echo base_url("personnel/processIncomeUsingAmount"); ?>",{data:data},function(result){
                                if(result == 'OK') {
                                    alert('done');
                                    $('#manual_entry_comment').val('');
                                    $('#manual_entry_amount').val('');
                                    $('#manual_entry_dropdown_incometype').val('').trigger('change');
                                    getEmployeeAdjustments($('#manual_entry_employeecode').val());
                                } else {
                                    alert(result)                        ;
                                }
                            });

                        } else {
                             alert('Error: You need to enter the following information: Employee, Period Start and End, Income, and Amount');
                        }    
                    });                
                }

                var processDeductionUsingHours = function() {
                    $('#btnProcessDeductionUsingHours').click(function(){
                        if ($('#periodstart').val() && $('#periodend').val() && $('#manual_entry_employeecode').val() && $('#manual_entry_dropdown_deductiontype').val() && $('#manual_entry_work_hours').val()) {
                            
                            var data = {
                                'employeecode'  : $('#manual_entry_employeecode').val(),
                                'periodstart'   : $('#periodstart').val(),
                                'periodend'     : $('#periodend').val(),
                                'adjustmentcode': $('#manual_entry_dropdown_deductiontype').val(),
                                'particular'    : $('#manual_entry_dropdown_deductiontype option:selected').text(),
                                'comment'       : $('#manual_entry_comment').val(),
                                'hours'         : $('#manual_entry_work_hours').val(),
                                'logid'         : ''
                            };
                            $.post("<?php echo base_url("personnel/processDeductionUsingHours"); ?>",{data:data},function(result){
                                if(result == 'OK') {
                                    alert('done');
                                    $('#manual_entry_comment').val('');
                                    $('#manual_entry_work_hours').val('');
                                    $('#manual_entry_dropdown_deductiontype').val('').trigger('change');
                                    getEmployeeAdjustments($('#manual_entry_employeecode').val());
                                } else {
                                    alert(result);
                                }

                            });

                        } else {

                            alert('Error: You need to enter the following information: Employee, Period Start and End, Deduction, and Unit');
                        }
                    });
                }

                var processDeductionUsingAmount = function() {
                    $('#btnProcessDeductionUsingAmount').click(function(){
                        if ($('#periodstart').val() && $('#periodend').val() && $('#manual_entry_employeecode').val() && $('#manual_entry_dropdown_deductiontype').val() && $('#manual_entry_amount').val()) {
                            var data = {
                                'employeecode'  : $('#manual_entry_employeecode').val(),
                                'periodstart'   : $('#periodstart').val(),
                                'periodend'     : $('#periodend').val(),
                                'adjustmentcode': $('#manual_entry_dropdown_deductiontype').val(),
                                'particular'    : $('#manual_entry_dropdown_deductiontype option:selected').text(),
                                'comment'       : $('#manual_entry_comment').val(),
                                'deduction'        : $('#manual_entry_amount').val()
                            };
                            $.post("<?php echo base_url("personnel/processDeductionUsingAmount"); ?>",{data:data},function(result){
                                if(result == 'OK') {
                                    alert('done');
                                    $('#manual_entry_comment').val('');
                                    $('#manual_entry_amount').val('');
                                    $('#manual_entry_dropdown_deductiontype').val('').trigger('change');
                                    getEmployeeAdjustments($('#manual_entry_employeecode').val());
                                } else {
                                    alert(result)                        ;
                                }
                            });

                        } else {
                             alert('Error: You need to enter the following information: Employee, Period Start and End, Deduction, and Amount');
                        }    
                    });                
                }

                var handleAdjustments = function() {
                    processIncomeUsingHours();
                    processIncomeUsingAmount();
                    processDeductionUsingHours();
                    processDeductionUsingAmount();
                }

                clearFields();
                handleMessages();
                handleDatePickers();
                handleButtons();
                handleChanges();
                handleTables();
                handleAdjustments();

                $('#btnDeleteAdjusment').click(function(){
                    var ids = $.map($('#table-adjustments').bootstrapTable('getSelections'), function (row) {
                        return row.adjustmentid;
                    });
                    $.post("<?php echo base_url("personnel/removeAdjustment"); ?>",{data:ids});
                    $('#table-adjustments').bootstrapTable('remove', {field: 'adjustmentid',values:ids});
                    //$('#table-adjustments').bootstrapTable('removeByUniqueId', record['adjustmentid']);
                });

                $('#btnSummarizeAdjustment').click(function(){
                    var ids = $.map($('#table-adjustments').bootstrapTable('getSelections'), function (row) {
                        return row.adjustmentid;
                    });
                    $.post("<?php echo base_url("personnel/summarizeAdjustment"); ?>",{data:ids},function(){
                        $('#manual_entry_employeecode').val(employeecode);
                        getEmployeeAdjustments(employeecode);
                        $('#table-summary').bootstrapTable('refresh');
                    });
                    //$('#table-adjustments').bootstrapTable('remove', {field: 'adjustmentid',values:ids});
                    //$('#table-adjustments').bootstrapTable('removeByUniqueId', record['adjustmentid']);
                });

                $('#btnExportExcel').click(function(){
                    $("#table-summary").table2excel({filename:"PayrollSummary.xls"});
                });

                $('#btnDeleteLog').click(function(){
                    var ids = $.map($('#table-logs').bootstrapTable('getSelections'), function (row) {
                        return row.logid;
                    });
                    $.post("<?php echo base_url("personnel/removeLog"); ?>",{data:ids});
                    $('#table-logs').bootstrapTable('remove', {field: 'logid',values:ids});
                    //$('#table-adjustments').bootstrapTable('removeByUniqueId', record['adjustmentid']);
                });

                $('#btnEditLog').click(function(){
                    if($('#log_periodstart').val() && $('#log_periodend').val()){
                        var ids = $.map($('#table-logs').bootstrapTable('getSelections'), function (row) {
                            $('#manual_entry_logid').val(row.logid);
                            $('#manual_entry_logdate').val(row.logdate).attr('disabled',true);
                            $('#manual_entry_employeecode').val(row.employeecode);
                            $('#manual_entry_login').val(row.login);
                            $('#manual_entry_logout').val(row.logout);
                            $('#manual_entry_dropdown_incometype_log').val(row.logtype).trigger('change');
                            //$('#manual_entry_dropdown_employeecode').val(row.employeecode).trigger('change');
                            $('#manual_entry_dropdown_employeecode').attr('disabled',true);
                            $('#periodstart').val($('#log_periodstart').val()).attr('disabled',true);
                            $('#periodend').val($('#log_periodend').val()).attr('disabled',true);
                        });
                    } else {
                        alert('Error: Please enter period start and period end.');
                        $('#log_periodstart').focus();                    
                    }
                });

                $('#btnProcessLog').click(function(){

                    if($('#log_periodstart').val() && $('#log_periodend').val()){

                        var ids = $.map($('#table-logs').bootstrapTable('getSelections'), function (row) {
                            return row.logid;
                        });

                        var data = {
                            'ids'           : ids,
                            'employeecode'  : $('#manual_entry_employeecode').val(),
                            'periodstart'   : $('#log_periodstart').val(),
                            'periodend'     : $('#log_periodend').val(),
                            'adjustmentcode': '',
                            'particular'    : '',
                            'comment'       : '',
                            'hours'         : ''
                        };

                        $.post("<?php echo base_url("personnel/processLogs"); ?>",{data:data},function(result){
                            if(result == 'OK') {
                                $('#manual_entry_comment').val('');
                                $('#manual_entry_work_hours').val('');
                                $('#manual_entry_dropdown_incometype').val('').trigger('change');
                                getEmployeeAdjustments(row.employeecode);
                                $('#table-logs').bootstrapTable('refresh');
                            } else {
                                alert(result);
                            }
                        });
                        
                    } else {
                        alert('Error: Please enter period start and period end.');
                        $('#log_periodstart').focus();
                    }
                });

                $('#btnLogTimeRecord').click(function(){

                    if (
                        $('#periodstart').val() 
                        && $('#periodend').val() 
                        && $('#manual_entry_employeecode').val() 
                        && $('#manual_entry_logdate').val() 
                        && $('#manual_entry_login').val() 
                        && $('#manual_entry_logout').val() 
                        && $('#manual_entry_dropdown_incometype_log').val()
                    )
                    {
                        var data = {
                            'logid'         : $('#manual_entry_logid').val(),
                            'employeecode'  : $('#manual_entry_employeecode').val(),
                            'logdate'       : $('#manual_entry_logdate').val(),
                            'periodstart'   : $('#periodstart').val(),
                            'periodend'     : $('#periodend').val(),
                            'login'         : $('#manual_entry_login').val(),
                            'logout'        : $('#manual_entry_logout').val(),
                            'logtype'       : $('#manual_entry_dropdown_incometype_log').val(),
                            'particular'    : $('#manual_entry_dropdown_incometype_log option:selected').text()
                        };

                        $.post("<?php echo base_url("personnel/logTimeRecord"); ?>",{data:data},function(result){
                            $('#table-logs').bootstrapTable('refresh');
                            $('#manual_entry_logid').val('');
                            //$('#manual_entry_employeecode').val('');
                            //$('#manual_entry_dropdown_employeecode').val('').trigger('change');
                            $('#manual_entry_logdate').val('').attr('disabled',false);
                            $('#periodstart').attr('disabled',false);
                            $('#periodend').attr('disabled',false);
                            $('#manual_entry_dropdown_employeecode').attr('disabled',false);
                            $('#manual_entry_login').val('');
                            $('#manual_entry_logout').val('');
                            $('#manual_entry_dropdown_incometype_log').val('').trigger('change');
                            alert('done');
                        });

                    } else {

                        if(!$('#manual_entry_employeecode').val()) {
                            alert('Error: Please select an Employee.');
                           $('#manual_entry_employeecode').focus();
                        } else {
                            if(!$('#periodstart').val()) {
                                alert('Error: Please enter Period Start.');
                                $('#periodstart').focus();
                            } else {
                                if(!$('#periodend').val()) {
                                    alert('Error: Please enter Period End.');
                                    $('#periodend').focus();
                                } else {
                                    if(!$('#manual_entry_logdate').val()) {
                                        alert('Error: Please enter a Log Date.');
                                       $('#manual_entry_logdate').focus();
                                    } else {
                                        if(!$('#manual_entry_login').val()) {
                                            alert('Error: Please enter Login.');
                                            $('#manual_entry_login').focus();
                                        } else {
                                            if(!$('#manual_entry_logout').val()) {
                                                alert('Error: Please enter Logout.');
                                                $('#manual_entry_logout').focus();
                                            } else {
                                                if(!$('#manual_entry_dropdown_incometype_log').val()) {
                                                    alert('Error: Please select a Log Type.');
                                                    $('#manual_entry_dropdown_incometype_log').focus();
                                                }                                            
                                            }                                        
                                        }
                                    }                                
                                }                            
                            }                        
                        }                    
                    }    
                });

            //End of jquery
            });
        </script>

    </body>

</html>