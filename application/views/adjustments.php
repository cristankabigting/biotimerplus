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
                                        <i class="icon-settings theme-font"></i>
                                        <span class="caption-subject font-blue-madison bold uppercase">PAYROLL ADJUSTMENTS</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_form" data-toggle="tab">Entry</a>
                                        </li>
                                        <li>
                                            <a href="#tab_payslip" data-toggle="tab">Pay Slip</a>
                                        </li>
                                        <li>
                                            <a href="#tab_list" data-toggle="tab">List</a>
                                        </li>
                                        <li>
                                            <a href="#tab_summary" data-toggle="tab">Summary</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_form">
                                            <form id="adjform" action="#" class="horizontal-form">
                                                <div class="form-body">
                                                    <div class="form-actions right">
                                                        <button type="button" class="btn btnClear ladda-button grey-mint" data-style="expand-right" style="width:11%;"> <i class="fa fa-refresh"></i> Refresh</button>
                                                        <button type="button" class="btn btnCalc ladda-button grey-mint" data-style="expand-right" style="width:11%;"> <i class="fa fa-calculator"></i> Calculate</button>
                                                        <button type="button" class="btn btnSave ladda-button grey-mint" data-style="expand-right" style="width:11%;"> <i class="fa fa-save"></i> Save</button>
                                                        <button type="button" class="btn btnEdit ladda-button grey-mint" data-style="expand-right" style="width:11%;"> <i class="fa fa-edit"></i> Edit</button>
                                                        <button type="button" class="btn btnGet ladda-button grey-mint" data-style="expand-right" style="width:11%;"> <i class="fa fa-money"></i> Get Salary</button>
                                                    </div>
                                                    <h3 class="form-section">Payroll Input</h3>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Record ID</label>
                                                            <input id="payroll_input_id" type="text" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">Select an Employee</label>
                                                            <select id="employeecode" class="form-control"></select>
                                                        </div>                                                                       
                                                    </div>                                                    
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="control-label">Period Start</label>
                                                                <input id="periodstart" type="text" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="control-label">Period End</label>
                                                                <input id="periodend" type="text" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="form-section">Personnel Info</h3>
                                                    <div clas="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Basic Salary</label>
                                                                <input id="basicsalary" type="text" value="0.00" placeholder="" class="form-control" maxlength="12" readonly/> 
                                                            </div>                                                        
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Allowances</label>
                                                                <input id="allowances" type="text" value="0.00" placeholder="" class="form-control" maxlength="12" readonly/> 
                                                            </div>                                                        
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Allowance Type</label>
                                                                <select id="allowance_type" class="form-control">
                                                                    <option value="0">None</option>
                                                                    <option value="Fixed">Fixed</option>
                                                                    <option value="Daily">Daily</option>
                                                                </select>
                                                            </div>                                                                       
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <h3 class="form-section">Holiday and Rest Day Work</h3>
                                                    <div clas="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Special Holiday Work</label>
                                                                <select id="special_holiday_work_day" class="form-control">
                                                                    <option value="0">None</option>
                                                                    <option value="1">1 Day</option>
                                                                    <option value="2">2 Days</option>
                                                                    <option value="3">3 Days</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Legal Holiday Work</label>
                                                                <select id="legal_holiday_work_day" class="form-control">
                                                                    <option value="0">None</option>
                                                                    <option value="1">1 Day</option>
                                                                    <option value="2">2 Days</option>
                                                                    <option value="3">3 Days</option>                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Rest Day Work</label>
                                                                <select id="restday_work_type" class="form-control">
                                                                    <option value="0">None</option>
                                                                    <option value="NR">Normal Rest Day</option>
                                                                    <option value="SR">Special Holiday and Rest Day</option>
                                                                    <option value="LR">Legal Holiday and Rest Day</option>
                                                                </select>
                                                            </div>
                                                        </div>
<!--                                                    <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Paid Holiday</label>
                                                                <select id="dropdown_paid_holiday_day" class="form-control">
                                                                    <option value="0">None</option>
                                                                    <option value="1">1 Day</option>
                                                                    <option value="2">2 Days</option>
                                                                    <option value="3">3 Days</option>
                                                                    <option value="4">4 Days</option>
                                                                    <option value="5">5 Days</option>
                                                                    <option value="6">6 Days</option>
                                                                </select>
                                                            </div>
                                                        </div>
 -->                                                    <div class="clearfix"></div>
                                                    </div>
                                                    <h3 class="form-section">Overtime Work</h3>
                                                    <div clas="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Regular Overtime (Hours)</label>
                                                                <input id="regular_overtime_hours" type="text" placeholder="" class="form-control" maxlength="5" value="0"/> 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Special Holiday Overtime (Hours)</label>
                                                                <input id="special_holiday_overtime_hours" type="text" placeholder="" class="form-control" maxlength="5" value="0"/> 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Legal Holiday Overtime (Hours)</label>
                                                                <input id="legal_holiday_overtime_hours" type="text" placeholder="" class="form-control" maxlength="5" value="0"/> 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Rest Day Overtime (Hours)</label>
                                                                <input id="restday_overtime_hours" type="text" placeholder="" class="form-control" maxlength="5" value="0"/> 
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <h3 class="form-section">Absences, Half Day, Late, and Undertime</h3>
                                                    <div clas="row">
<!--                                                    <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Paid Leave</label>
                                                                <select id="dropdown_paid_leave_day" class="form-control">
                                                                    <option value="0">None</option>
                                                                    <option value="1">1 Day</option>
                                                                    <option value="2">2 Days</option>
                                                                    <option value="3">3 Days</option>
                                                                    <option value="4">4 Days</option>
                                                                    <option value="5">5 Days</option>
                                                                    <option value="6">6 Days</option>
                                                                </select>
                                                            </div>
                                                        </div>
 -->                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Absences</label>
                                                                <select id="unpaid_absent_day" class="form-control">
                                                                    <option value="0">None</option>
                                                                    <option value="1">1 Day</option>
                                                                    <option value="2">2 Days</option>
                                                                    <option value="3">3 Days</option>
                                                                    <option value="4">4 Days</option>
                                                                    <option value="5">5 Days</option>
                                                                    <option value="6">6 Days</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Half Day</label>
                                                                <select id="unpaid_halfday" class="form-control">
                                                                    <option value="0">None</option>
                                                                    <option value="1">1 Time</option>
                                                                    <option value="2">2 Times</option>
                                                                    <option value="3">3 Times</option>
                                                                    <option value="4">4 Times</option>
                                                                    <option value="5">5 Times</option>
                                                                    <option value="6">6 Times</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Late (Hours)</label>
                                                                <input id="late_hours" type="text" placeholder="" class="form-control" maxlength="5" value="0"/> 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Undertime (Hours)</label>
                                                                <input id="undertime_hours" type="text" placeholder="" class="form-control" maxlength="5" value="0"/> 
                                                            </div>
                                                        </div>
<!--                                                    <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Time Offset (Hours)</label>
                                                                <input id="time_offset_hours" type="text" placeholder="" class="form-control" maxlength="5" value="0"/> 
                                                            </div>
                                                        </div>
 -->                                                    <div class="clearfix"></div>
                                                    </div>
                                                    <h3 class="form-section">Statutory Deductions</h3>
                                                    <div clas="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">SSS Contribution (Amount)</label>
                                                                <input id="sss_amount" type="text" placeholder="" class="form-control" maxlength="10" value="0.00"/> 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Philhealth Contribution (Amount)</label>
                                                                <input id="phic_amount" type="text" placeholder="" class="form-control" maxlength="10" value="0.00"/> 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Pag-Ibig Contribution (Amount)</label>
                                                                <input id="hdmf_amount" type="text" placeholder="" class="form-control" maxlength="10" value="0.00"/> 
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <h3 class="form-section">Cash Advance, Other Income and Deduction</h3>
                                                    <div clas="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Cash Advance (Amount)</label>
                                                                <input id="cash_advance_amount" type="text" placeholder="" class="form-control" maxlength="10" value="0.00"/> 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Other Income (Amount)</label>
                                                                <input id="other_income_amount" type="text" placeholder="" class="form-control" maxlength="10" value="0.00"/> 
                                                            </div>
                                                        </div>                                                       
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Other Deduction (Amount)</label>
                                                                <input id="other_deduction_amount" type="text" placeholder="" class="form-control" maxlength="10" value="0.00"/> 
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>

                                                </div>
                                                <div class="form-actions right">
                                                    <button type="button" class="btn btnClear ladda-button grey-mint" data-style="expand-right" style="width:11%;"> <i class="fa fa-refresh"></i> Refresh</button>
                                                    <button type="button" class="btn btnCalc ladda-button grey-mint" data-style="expand-right" style="width:11%;"> <i class="fa fa-calculator"></i> Calculate</button>
                                                    <button type="button" class="btn btnSave ladda-button grey-mint" data-style="expand-right" style="width:11%;"> <i class="fa fa-save"></i> Save</button>
                                                    <button type="button" class="btn btnEdit ladda-button grey-mint" data-style="expand-right" style="width:11%;"> <i class="fa fa-edit"></i> Edit</button>
                                                    <button type="button" class="btn btnGet ladda-button grey-mint" data-style="expand-right" style="width:11%;"> <i class="fa fa-money"></i> Get Salary</button>
                                                </div>                                                
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="tab_payslip">
                                            <form class="form-horizontal" role="form">
                                                <div class="form-body">
                                                    <h2 class="margin-bottom-20"> <span id="employee_name"></span> Pay Slip</h2>
                                                    <h3 class="form-section">Income</h3>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Cut-Off Start:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="cut-off-start"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Cut-Off End:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="cut-off-end"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Salary:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="cut-off-salary"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Allowance:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="cut-off-allowance"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Special Holiday Pay:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="shpay"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Regular OT:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="regot"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Legal Holiday Pay:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="lhpay"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Holiday OT:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="holidayot"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Rest Day Pay:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="rdpay"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Rest Day OT:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="rdot"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Other Income:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="other_income"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">TOTAL INCOME:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="total_income"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="form-section">Deduction</h3>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">SSS Contribution:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="sss_deduction"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Philhealth Contribution:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="phic_deduction"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Pag-ibig Contribution:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="hdmf_deduction"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Cash Advance:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="cash_deduction"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Absences:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="absence_deduction"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Half Day:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="halfday_deduction"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Late:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="late_deduction"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Undertime:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="undertime_deduction"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Other Deduction:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="other_deduction"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">TOTAL DEDUCTION:</label>
                                                                <div class="col-md-4 text-right">
                                                                    <p class="form-control-static" id="total_deduction"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
<!--                                                 <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-9">
                                                                    <button id="btnCopy" type="button" class="btn green">
                                                                        <i class="fa fa-pencil"></i> Copy</button>
                                                                    <button type="button" class="btn default">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6"> </div>
                                                    </div>
                                                </div>
 -->                                            </form>                                            
                                        </div>
                                        <div class="tab-pane" id="tab_list">
                                            <table id="table-payroll-inputs" data-url="<?php echo base_url("adjustments/getPayrollInputs");?>" data-toggle="table" data-height="299" data-pagination="true" data-search="true">
                                                <thead>
                                                    <tr>
                                                        <th data-field="state" data-radio="true"></th>
                                                        <th data-field="payroll_input_id" data-align="left" data-sortable="true">Record ID</th>
                                                        <th data-field="project" data-align="left" data-sortable="true">Project</th>
                                                        <th data-field="employeecode" data-align="left" data-sortable="true">Employee<br>Code</th>
                                                        <th data-field="employeefirst" data-align="left" data-sortable="true">Firstname</th>
                                                        <th data-field="employeelast" data-align="left" data-sortable="true">Lastname</th>
                                                        <th data-field="periodstart" data-align="left" data-sortable="true">Period<br>Start</th>
                                                        <th data-field="periodend" data-align="left" data-sortable="true">Period<br>End</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab_summary">
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

                handleMessageStatus.init();

                $('#table-payroll-inputs').bootstrapTable();

                var getEmployee = function()
                {
                    $.post("<?php echo base_url("personnel/getEmployees"); ?>",function(dropdown){
                        $('#employeecode').html(dropdown);
                        $('#employeecode').select2({placeholder:'Select an Employee',width:null});
                    });
                }

                var getEmployeeData = function() 
                {
                    $.post("<?php echo base_url("personnel/getEmployeeData"); ?>",{employeecode:$('#employeecode').val()},function(data){
                        
                        obj = JSON.parse(data);

                        if(!obj.salarytype) 
                        {
                            obj.salarytype = 'Monthly';
                        }

                        if(!obj.payrollfrequency) 
                        {
                            obj.payrollfrequency = 'Weekly';
                        }

                        if(obj.payrollfrequency == 'Semi-Monthly' && obj.salarytype == 'Monthly') 
                        {
                            $('#basicsalary').val(obj.basicsalary/2);
                            if(obj.allowances)
                            {
                                $('#allowances').val(obj.allowances/2);    
                            }
                        }

                        if(obj.payrollfrequency == 'Semi-Monthly' && obj.salarytype == 'Semi-Monthly') 
                        {
                            $('#basicsalary').val(obj.basicsalary);
                            if(obj.allowances)
                            {
                                $('#allowances').val(obj.allowances);    
                            }
                        }

                        if(obj.payrollfrequency == 'Semi-Monthly' && obj.salarytype == 'Weekly') 
                        {
                            $('#basicsalary').val(obj.basicsalary*2);
                            if(obj.allowances)
                            {
                                $('#allowances').val(obj.allowances*2);    
                            }

                        }

                        if(obj.payrollfrequency == 'Semi-Monthly' && obj.salarytype == 'Daily') 
                        {
                            $('#basicsalary').val(obj.basicsalary*12);
                            if(obj.allowances)
                            {
                                $('#allowances').val(obj.allowances*12);    
                            }                            
                        }

                        if(obj.payrollfrequency == 'Weekly' && obj.salarytype == 'Monthly') 
                        {
                            $('#basicsalary').val(obj.basicsalary/4);
                            if(obj.allowances)
                            {
                                $('#allowances').val(obj.allowances/4);    
                            }                            
                        }

                        if(obj.payrollfrequency == 'Weekly' && obj.salarytype == 'Semi-Monthly') 
                        {
                            $('#basicsalary').val(obj.basicsalary/2);
                            if(obj.allowances)
                            {
                                $('#allowances').val(obj.allowances/2);    
                            }                            
                        }

                        if(obj.payrollfrequency == 'Weekly' && obj.salarytype == 'Weekly') 
                        {
                            $('#basicsalary').val(obj.basicsalary);
                            if(obj.allowances)
                            {
                                $('#allowances').val(obj.allowances);    
                            }
                        }

                        if(obj.payrollfrequency == 'Weekly' && obj.salarytype == 'Daily') 
                        {
                            $('#basicsalary').val(obj.basicsalary*6);
                            if(obj.allowances)
                            {
                                $('#allowances').val(obj.allowances*6);    
                            }
                        }

                        if(obj.allowance_type){
                            $('#allowance_type').val(obj.allowance_type).trigger('change');    
                        }
                                                
                    });                    
                }

                var initDropDown = function()
                {
                    $('#special_holiday_work_day').select2();
                    $('#legal_holiday_work_day').select2();
                    $('#restday_work_type').select2();
                    //$('#dropdown_paid_holiday_day').select2();
                    //$('#dropdown_paid_leave_day').select2();
                    $('#unpaid_absent_day').select2();
                    $('#unpaid_halfday').select2();
                    $('#allowance_type').select2();
                }

                var datePickers = function() 
                {
                    $('#periodstart, #periodend').datepicker({
                        rtl: App.isRTL(),
                        format: "yyyy-mm-dd",
                        orientation: "bottom right",
                        //startDate: '-12d',
                        //endDate: '+12d',
                        autoclose: true,
                        clearBtn: true,
                        weekStart: 1
                    });
                }

                var resetDropDown = function()
                {
                    $('#employeecode').val('').trigger('change'); $('#employeecode').attr('disabled',false);
                    $('#special_holiday_work_day').val('0').trigger('change');
                    $('#legal_holiday_work_day').val('0').trigger('change');
                    $('#restday_work_type').val('0').trigger('change');
                    //$('#dropdown_paid_holiday_day').val('0').trigger('change');
                    //$('#dropdown_paid_leave_day').val('0').trigger('change');
                    $('#unpaid_absent_day').val('0').trigger('change');
                    $('#unpaid_halfday').val('0').trigger('change');
                    $('#allowance_type').val('0').trigger('change');
                }

                var resetFields = function()
                {
                    //$('#time_offset_hours').val('0');
                    $('#regular_overtime_hours').val('0');
                    $('#special_holiday_overtime_hours').val('0');
                    $('#legal_holiday_overtime_hours').val('0');
                    $('#restday_overtime_hours').val('0');
                    $('#late_hours').val('0');
                    $('#undertime_hours').val('0');

                    $('#basicsalary').val('0.00');
                    $('#allowances').val('0.00');
                    $('#sss_amount').val('0.00');
                    $('#phic_amount').val('0.00');
                    $('#hdmf_amount').val('0.00');
                    $('#cash_advance_amount').val('0.00');
                    $('#other_income_amount').val('0.00');
                    $('#other_deduction_amount').val('0.00');

                    $('#payroll_input_id').val('');
                }

                var clearForm = function()
                {
                    resetDropDown();
                    resetFields();
                    $('#table-payroll-inputs').bootstrapTable('refresh');
                }

                var buttonEvents = function() 
                {

                    Ladda.bind('.btnSave', {
                        callback: function( instance ) {
                            var progress = 0;
                            var interval = setInterval( function() {
                                progress = Math.min( progress + Math.random() * 0.1, 1 );
                                instance.setProgress( progress );
                                if( progress === 1 ) {
                                    instance.stop();
                                    clearInterval( interval );
                                    var data = {
                                        periodstart:$('#periodstart').val(),
                                        periodend:$('#periodend').val(),
                                        employeecode:$('#employeecode').val(),
                                        allowance_type:$('#allowance_type').val(),
                                        special_holiday_work_day:$('#special_holiday_work_day').val(),
                                        legal_holiday_work_day:$('#legal_holiday_work_day').val(),
                                        restday_work_type:$('#restday_work_type').val(),
                                        unpaid_absent_day:$('#unpaid_absent_day').val(),
                                        unpaid_halfday:$('#unpaid_halfday').val(),
                                        regular_overtime_hours:$('#regular_overtime_hours').val(),
                                        restday_overtime_hours:$('#restday_overtime_hours').val(),
                                        special_holiday_overtime_hours:$('#special_holiday_overtime_hours').val(),
                                        legal_holiday_overtime_hours:$('#legal_holiday_overtime_hours').val(),
                                        sss_amount:$('#sss_amount').val(),
                                        phic_amount:$('#phic_amount').val(),
                                        hdmf_amount:$('#hdmf_amount').val(),
                                        cash_advance_amount:$('#cash_advance_amount').val(),
                                        late_hours:$('#late_hours').val(),
                                        undertime_hours:$('#undertime_hours').val(),
                                        other_income_amount:$('#other_income_amount').val(),
                                        other_deduction_amount:$('#other_deduction_amount').val(),
                                        basicsalary:$('#basicsalary').val(),
                                        allowances:$('#allowances').val(),
                                        payroll_input_id:$('#payroll_input_id').val()
                                    };

                                    $.post("<?php echo base_url("adjustments/savePayrollInput"); ?>",{data:data},function(result){
                                        alert(result);
                                        $('#employeecode').attr('disabled',false);
                                        clearForm();
                                    });                                                                
                                }
                            }, 100 );
                        }
                    });

                    Ladda.bind('.btnClear', {
                        callback: function( instance ) {
                            var progress = 0;
                            var interval = setInterval( function() {
                                progress = Math.min( progress + Math.random() * 0.1, 1 );
                                instance.setProgress( progress );
                                if( progress === 1 ) {
                                    instance.stop();
                                    clearInterval( interval );
                                    clearForm();
                                }
                            }, 100 );
                        }
                    });

                    Ladda.bind('.btnEdit', {
                        callback: function( instance ) {
                            var progress = 0;
                            var interval = setInterval( function() {
                                progress = Math.min( progress + Math.random() * 0.1, 1 );
                                instance.setProgress( progress );
                                if( progress === 1 ) {
                                    instance.stop();
                                    clearInterval( interval );
                                    var ids = $.map($('#table-payroll-inputs').bootstrapTable('getSelections'), function (row) {
                                        return row.payroll_input_id;
                                    });
                                    $('#payroll_input_id').val(ids);
                                    $.post("<?php echo base_url("adjustments/getPayrollInput"); ?>",{id:$('#payroll_input_id').val()},function(data){
                                        obj = JSON.parse(data);
                                        $('#periodstart').val(obj.periodstart);
                                        $('#periodend').val(obj.periodend);
                                        $('#employeecode').val(obj.employeecode).trigger('change');
                                        $('#allowance_type').val(obj.allowance_type).trigger('change');
                                        $('#special_holiday_work_day').val(obj.special_holiday_work_day).trigger('change');
                                        $('#legal_holiday_work_day').val(obj.legal_holiday_work_day).trigger('change');
                                        $('#restday_work_type').val(obj.restday_work_type).trigger('change');
                                        $('#unpaid_absent_day').val(obj.unpaid_absent_day).trigger('change');
                                        $('#unpaid_halfday').val(obj.unpaid_halfday).trigger('change');
                                        $('#regular_overtime_hours').val(obj.regular_overtime_hours);
                                        $('#restday_overtime_hours').val(obj.restday_overtime_hours);
                                        $('#special_holiday_overtime_hours').val(obj.special_holiday_overtime_hours);
                                        $('#legal_holiday_overtime_hours').val(obj.legal_holiday_overtime_hours);
                                        $('#sss_amount').val(obj.sss_amount);
                                        $('#phic_amount').val(obj.phic_amount);
                                        $('#hdmf_amount').val(obj.hdmf_amount);
                                        $('#cash_advance_amount').val(obj.cash_advance_amount);
                                        $('#late_hours').val(obj.late_hours);
                                        $('#undertime_hours').val(obj.undertime_hours);
                                        $('#other_income_amount').val(obj.other_income_amount);
                                        $('#other_deduction_amount').val(obj.other_deduction_amount);
                                        $('#basicsalary').val(obj.basicsalary);
                                        $('#allowances').val(obj.allowances);
                                        $('#employeecode').attr('disabled',true);
                                    });
                                }
                            }, 100 );
                        }
                    });

                    Ladda.bind('.btnCalc', {
                        callback: function( instance ) {
                            var progress = 0;
                            var interval = setInterval( function() {
                                progress = Math.min( progress + Math.random() * 0.1, 1 );
                                instance.setProgress( progress );

                                if( progress === 1 ) {
                                    instance.stop();
                                    clearInterval( interval );
                                    var name        = $('#employeecode option:selected').text();
                                    var periodstart = $('#periodstart').val();
                                    var periodend   = $('#periodend').val();
                                    var basicsalary = $('#basicsalary').val();
                                    var allowances  = $('#allowances').val();

                                    var sh_days     = $('#special_holiday_work_day').val();
                                    var lh_days     = $('#legal_holiday_work_day').val();
                                    var rd_days     = $('#restday_work_type').val();
                                    var regot_hours = $('#regular_overtime_hours').val();
                                    var shot_hours = $('#special_holiday_overtime_hours').val();
                                    var lhot_hours =  $('#legal_holiday_overtime_hours').val();
                                    var holiday_hours = Math.round(shot_hours) + Math.round(lhot_hours);
                                    var restday_hours = $('#restday_overtime_hours').val();
                                    var other_income  = $('#other_income_amount').val();

                                    $('#other_income').text(Math.round(other_income).toFixed(2));
                                    $('#employee_name').text(name);
                                    $('#cut-off-start').text(periodstart);
                                    $('#cut-off-end').text(periodend);
                                    $('#cut-off-salary').text(Math.round(basicsalary).toFixed(2));
                                    $('#cut-off-allowance').text(Math.round(allowances).toFixed(2));

                                    //Calculate Special Holiday Pay
                                    var SpecialHolidayPay = calcSpecialHolidayPay(basicsalary,sh_days);
                                    var LegalHolidayPay = calcLegalHolidayPay(basicsalary,lh_days);
                                    var RestDayPay = calcRestDayPay(basicsalary,rd_days);
                                    var RegularOT = calcRegularOT(basicsalary,regot_hours);
                                    var HolidayOT = calcHolidayOT(basicsalary,holiday_hours);
                                    var RestdayOT = calcRestdayOT(basicsalary,restday_hours);

                                    var total_income = Math.round(basicsalary) + Math.round(allowances) + Math.round(SpecialHolidayPay) + Math.round(LegalHolidayPay) + Math.round(RestDayPay) + Math.round(RegularOT) + Math.round(HolidayOT) + Math.round(RestdayOT);
                                    $('#total_income').text(total_income.toFixed(2));

                                    // DEDUCTIONS
                                    var sss_deduction  = $('#sss_amount').val();
                                    $('#sss_deduction').text(Math.round(sss_deduction).toFixed(2));

                                    var phic_deduction  = $('#phic_amount').val();
                                    $('#phic_deduction').text(Math.round(phic_deduction).toFixed(2));

                                    var hdmf_deduction  = $('#hdmf_amount').val();
                                    $('#hdmf_deduction').text(Math.round(hdmf_deduction).toFixed(2));

                                    var cash_deduction  = $('#cash_advance_amount').val();
                                    $('#cash_deduction').text(Math.round(cash_deduction).toFixed(2));

                                    days_absent = $('#unpaid_absent_day').val();
                                    if($('#allowance_type').val() == 'Daily' && days_absent > 0) {
                                        alert('test');
                                        dailyallowance = allowances/6;
                                        allowance_deduction = dailyallowance * days_absent;
                                    }else{
                                        allowance_deduction = 0;
                                    }

                                    var other_deduction  = $('#other_deduction_amount').val();
                                    other_deduction = Math.round(other_deduction) + Math.round(allowance_deduction);
                                    $('#other_deduction').text(Math.round(other_deduction).toFixed(2));

                                    // Absences, Half Day, Late, Undertime
                                    var absence_deduction  = $('#unpaid_absent_day').val();
                                    absence_deduction = (basicsalary/6) * absence_deduction;
                                    $('#absence_deduction').text(Math.round(absence_deduction).toFixed(2));

                                    var halfday_deduction  = $('#unpaid_halfday').val();
                                    halfday_deduction = (basicsalary/6) * halfday_deduction * 0.5;
                                    $('#halfday_deduction').text(Math.round(halfday_deduction).toFixed(2));

                                    var late_deduction  = $('#late_hours').val();
                                    late_deduction = (basicsalary/24) * late_deduction;
                                    $('#late_deduction').text(Math.round(late_deduction).toFixed(2));

                                    var undertime_deduction  = $('#undertime_hours').val();
                                    undertime_deduction = (basicsalary/24) * undertime_deduction;
                                    $('#undertime_deduction').text(Math.round(undertime_deduction).toFixed(2));

                                    var total_deduction = Math.round(sss_deduction) + Math.round(phic_deduction) + Math.round(hdmf_deduction) + Math.round(cash_deduction) + Math.round(other_deduction) + Math.round(absence_deduction) + Math.round(halfday_deduction) + Math.round(late_deduction) + Math.round(undertime_deduction);
                                    $('#total_deduction').text(total_deduction.toFixed(2));
                                }
                            }, 100 );
                        }
                    });

                    $('.btnCopy').click(function(){
                        $('#tab_payslip').html();
                    });
                }

                var calcSpecialHolidayPay = function(basicsalary,sh_days){
                    var shpay = (basicsalary/6) * 0.3 * sh_days;  
                    $('#shpay').text(shpay.toFixed(2));
                    return shpay;
                }

                var calcLegalHolidayPay = function(basicsalary,lh_days){
                    var lhpay = (basicsalary/6) * lh_days;  
                    $('#lhpay').text(lhpay.toFixed(2));
                    return lhpay;
                }

                var calcRestDayPay = function(basicsalary,rd_days){
                    if(rd_days == '0'){
                        factor = 0;
                    }
                    if(rd_days == 'NR'){
                        factor = 1.3;
                    }
                    if(rd_days == 'SR'){
                        factor = 1.5;
                    }
                    if(rd_days == 'LR'){
                        factor = 2.3;
                    }

                    var rdpay = (basicsalary/6) * factor;
                    $('#rdpay').text(rdpay.toFixed(2));
                    return rdpay;
                }

                var calcRegularOT = function(basicsalary,regot_hours){
                    var regot = (basicsalary/48) * regot_hours;
                    $('#regot').text(regot.toFixed(2));
                    return regot;   
                }

                var calcHolidayOT = function(basicsalary,holiday_hours){
                    var holidayot = (basicsalary/48) * holiday_hours;
                    $('#holidayot').text(holidayot.toFixed(2));
                    return holidayot;   
                }

                var calcRestdayOT = function(basicsalary,restday_hours){
                    var rdot = (basicsalary/48) * restday_hours;
                    $('#rdot').text(rdot.toFixed(2));
                    return rdot;   
                }

                var updateEmployeeAllowance = function(employeecode) {

                    var data = {
                        employeecode:$('#employeecode').val(),
                        allowance_type:$('#allowance_type').val()
                    }

                    $.post("<?php echo base_url("adjustments/updateAllowanceType"); ?>",{data:data});
                }

                var dropDownEvents = function() 
                {
                    $('.btnGet').click(function(){
                        getEmployeeData();
                    });

                    $('#allowance_type').change(function(){
                        updateEmployeeAllowance($('#employeecode').val());
                    });
                }

                getEmployee();
                initDropDown();
                datePickers();
                buttonEvents();
                dropDownEvents();

            //End of jquery
            });
        </script>

    </body>

</html>