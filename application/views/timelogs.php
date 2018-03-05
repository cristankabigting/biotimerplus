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
                                        <i class="icon-clock theme-font"></i>
                                        <span class="caption-subject font-blue-madison bold uppercase">TIME LOGS</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Select an Employee</label>
                                                <select id="employeecode" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">    
                                            <div class="form-group">
                                                <label class="control-label">Cut-Off Start</label>
                                                <input id="periodstart" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">    
                                            <div class="form-group">
                                                <label class="control-label">Cut-Off End</label>
                                                <input id="periodend" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Log In</label>
                                                <input id="login" type="text" class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Log Out</label>
                                                <input id="logout" type="text" class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Time Type</label>
                                                <select id="time_type" class="bs-select form-control">
                                                    <option value="RT">Regular Time</option>
                                                    <option value="OT">Over Time</option>
                                                </select>
                                            </div>                                                        
                                        </div>
                                        <input id="logid" type="hidden" class="form-control">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <button type="button" class="btn btnGetLogSummary ladda-button grey-mint" data-style="expand-right" style="width:100%;"> <i class="fa fa-list"></i> View Summary</button>
                                            </div>    
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <button type="button" class="btn btnEditLog ladda-button grey-mint" data-style="expand-right" style="width:100%;"> <i class="fa fa-edit"></i> Edit Log</button>
                                            </div>    
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <button type="button" class="btn btnSaveLog ladda-button grey-mint" data-style="expand-right" style="width:100%;"> <i class="fa fa-save"></i> Save Log</button>
                                            </div>    
                                        </div>
                                    </div>    
                                    <div class="row">    
                                        <div class="col-md-12">
                                            <table id="table-logs" data-toggle="table" data-height="299" data-pagination="true" data-search="true">
                                                <thead>
                                                    <tr>
                                                        <th data-field="state" data-radio="true"></th>
                                                        <th data-field="periodstart" data-align="left" data-sortable="true">Period<br>Start</th>
                                                        <th data-field="periodend" data-align="left" data-sortable="true">Period<br>End</th>
                                                        <th data-field="logdate" data-align="left" data-sortable="true">Log<br>Date</th>
                                                        <th data-field="particular" data-align="left" data-sortable="true">Log<br>Type</th>
                                                        <th data-field="login" data-align="left" data-sortable="true">Login<br>Time</th>
                                                        <th data-field="logout" data-align="left" data-sortable="true">Logout<br>Time</th>
                                                        <th data-field="duration" data-align="left" data-sortable="true">Duration<br>(Hours)</th>
                                                        <!--
                                                        <th data-field="processed" data-align="left" data-sortable="true">Processed</th>
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
                        </div>
                    </div>
                </div>
                <!-- END PROFILE CONTENT -->
            </div>
        </div>
        
        <script>

            jQuery(document).ready(function(){

                handleMessageStatus.init();
                
                $('#table-logs').bootstrapTable();

                $('#time_type').select2({width:null});

                var getEmployee = function()
                {
                    $.post("<?php echo base_url("personnel/getEmployees"); ?>",function(dropdown){
                        $('#employeecode').html(dropdown);
                        $('#employeecode').select2({placeholder:'Select an Employee',width:null});
                    });
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

                    $("#login, #logout").datetimepicker({
                        isRTL: App.isRTL(),
                        format: "yyyy-mm-dd HH:ii P",
                        showMeridian: true,
                        minuteStep: 1,
                        autoclose: true,
                        pickerPosition: (App.isRTL() ? "bottom-right" : "bottom-left"),
                        todayBtn: true,
                        weekStart: 1
                    });
                }

                var getLogSummary = function() 
                {
                    $('.btnGetLogSummary').click(function(){
                        getEmployeeLogs($('#employeecode').val(),$('#periodstart').val(),$('#periodend').val());
                    });
                }
                
                var getEmployeeLogs = function(employeecode,periodstart,periodend) 
                {
                    $.getJSON("<?php echo base_url("timelogs/getEmployeeLogs2"); ?>",{employeecode:employeecode,periodstart:periodstart,periodend:periodend},function(data){
                        $('#table-logs').bootstrapTable({data:data});
                        $('#table-logs').bootstrapTable('load',data);
                        $('#table-logs').bootstrapTable('refresh');
                    });                
                }

                var saveLog = function() {
                    $('.btnSaveLog').click(function(){

                        if ($('#employeecode').val() 
                            && $('#login').val() 
                            && $('#time_type').val()
                        )
                        {
                            var data = {
                                'logid'         : $('#logid').val(),
                                'employeecode'  : $('#employeecode').val(),
                                'login'         : $('#login').val(),
                                'logout'        : $('#logout').val(),
                                'timetype'      : $('#time_type').val()
                            };

                            $.post("<?php echo base_url("personnel/logTimeRecord"); ?>",{data:data},function(result){
                                getEmployeeLogs($('#employeecode').val());
                                handleMessageStatus.init();
                                $('#logid').val('');
                                $('#periodstart').attr('disabled',false);
                                $('#periodend').attr('disabled',false);
                                $('#employeecode').attr('disabled',false);
                                $('#login').val('');
                                $('#logout').val('');
                                $('#time_type').val('').trigger('change');
                                alert('done');
                            });

                        } else {
                            alert('Error: You need to select an employee, then enter a login time.');
                        }    
                    });
                }

                var editLog = function() {
                    $('.btnEditLog').click(function(){
                        var ids = $.map($('#table-logs').bootstrapTable('getSelections'), function (row) {
                            $('#logid').val(row.logid);
                            $('#employeecode').val(row.employeecode);
                            $('#login').val(row.login);
                            $('#logout').val(row.logout);
                            $('#time_type').val(row.timetype).trigger('change');
                            $('#employeecode').attr('disabled',true);
                        });
                    });
                }

                getEmployee();
                datePickers();
                getLogSummary();
                saveLog();
                editLog();

            //End of jquery
            });
        </script>

    </body>

</html>