<?php global $workflow; 
//var_dump($workflow);
//die();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Claude Siefers</title>
		<!--
		<link rel="stylesheet" type="text/css" href="<?php echo $workflow->href_public; ?>/jquery/ui-cupertino/easyui.css">
                <link rel="stylesheet" type="text/css" href="<?php echo $workflow->href_public; ?>/jquery/ui-sunny/easyui.css">
                <link rel="stylesheet" type="text/css" href="<?php echo $workflow->href_public; ?>/jquery/ui-pepper-grinder/easyui.css"> 
                <link rel="stylesheet" type="text/css" href="<?php echo $workflow->href_public; ?>/jquery/ui-dark-hive/easyui.css"> -->
                <link rel="stylesheet" type="text/css" href="<?php echo $workflow->href_public; ?>/jquery/ui-sunny/easyui.css">
		<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
                <link rel="stylesheet" href="//api.jqueryui.com/jquery-wp-content/themes/api.jqueryui.com/style.css">
                
	<link rel="stylesheet" href="http://jquery-ui.googlecode.com/svn/tags/1.6rc5/themes/base/ui.core.css" type="text/css" />
	<link rel="stylesheet" href="http://jquery-ui.googlecode.com/svn/tags/1.6rc5/themes/base/ui.theme.css" type="text/css" title="ui-theme" />
	<link rel="stylesheet" href="http://jquery-ui.googlecode.com/svn/tags/1.6rc5/themes/base/ui.allplugins.css" type="text/css" />
        
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
		<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
	
		<link rel="stylesheet" type="text/css"
                      href="<?php echo $workflow->href_public; ?>/bootstrap/dist/css/bootstrap.css">
                <link rel="stylesheet" type="text/css" 
                      href="<?php echo $workflow->href_public; ?>/css/questionnaires_custom.css">
	</head>
	<body>
		<!-- The Main wrapper div starts -->
		<div class="container">
			<!-- header content -->
			<div class="header_title">
			   <h1><a style="color:orange;" href=".">Questionnaires builder</a></h1>
			</div
			<!-- Navigation -->
			<div class="navbar">
	          <div class="navbar-inner">
	            <div class="container">
	              <ul class="nav">
	                <li class="active"><a href="#">Home</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>

	        <div class="row">
                    <div class="span12">
                        <table id="dg" 
                               title="Questionnaires" 
                               class="easyui-treegrid" 
                               style="width:auto"
                               showFooter="true"
                               idField="id" 
                               treeField="region"
                               loadFilter: myLoadFilter
                               data-options="
                                    url:'/public/ajax/json/readquestionnaires/a/b/c/d',
                                    iconCls: 'icon-ok',
                                    rownumbers: false,
                                    animate: true,
                                    collapsible: true,
                                    fitColumns: true,
                                "
                                >
                                <thead frozen="true">
                                        <tr>
                                                <th field="region" width="auto">Region</th>
                                        </tr>
                                </thead>
                                <thead>
                                        <tr>
                                                <th field="f1" width="auto" align="right">Pierre</th>
                                                <th field="f2" width="auto" align="right">Jean</th>
                                                <th field="f3" width="auto" align="right">Anne</th>
                                        </tr>
                                </thead>
                        </table>					
                    </div>
				
                    <div id="id_wrap_panel" class="wrap_panel" >
                                <div class="span12">

                                         <div class="close_Arrow">
                                         </div>		

                                         <!-- the pane with questionnaire/question config -->					 
                                         <div id="tabs_1" class="easyui-tabs" style="width:auto;height:auto">

                                                        <!-- QUESTIONNAIRE TAB -->
                                                        <div id="tab_1" title="Config questionnaire" 
                                                                data-options="" 
                                                                style="">	

                                                                <div class="cfg_quest_items">

                                                                        <div class="cfg_quest_item_label">
                                                                           <span class="icon-adjust"></span> Coverage 
                                                                        </div>									
                                                                        <div class="cfg_quest_item_component">
                                                                          <input class="easyui-numberbox" value="100"></input> %
                                                                        </div>		

                                                                        <div class="cfg_quest_item_label">
                                                                           <span class="icon-screenshot"></span> Automatic save 
                                                                        </div>									
                                                                        <div class="cfg_quest_item_component">
                                                                           <div class="container_row">
                                                                                  <div class="radio_input"><input type="radio" name="group1" value="no" checked></div><div class="radio_input_text">Yes</div>
                                                                                  <div class="radio_input"><input type="radio" name="group1" value="no" checked></div><div class="radio_input_text">No</div>
                                                                           </div>
                                                                        </div>

                                                                        <div class="cfg_quest_item_label">
                                                                           <span class="icon-leaf"></span> Config level 
                                                                        </div>									
                                                                        <div class="cfg_quest_item_component">
                                                                           <div class="container_row">
                                                                                  <div class="radio_input"><input type="radio" name="group1" value="no" checked></div><div class="radio_input_text">Basic</div>
                                                                                  <div class="radio_input"><input type="radio" name="group1" value="no" checked></div><div class="radio_input_text">Advanced</div>
                                                                                  <div class="radio_input"><input type="radio" name="group1" value="no" checked></div><div class="radio_input_text">Expert</div>
                                                                           </div>
                                                                        </div>		

                                                                        <div class="cfg_quest_item_label">
                                                                           <span class="icon-leaf"></span> Chrono 
                                                                        </div>									
                                                                        <div class="cfg_quest_item_component">
                                                                           <div class="container_row">
                                                                                  <div class="radio_input"><input type="radio" name="group1" value="no" checked></div><div class="radio_input_text">Yes</div>
                                                                                  <div class="radio_input"><input type="radio" name="group1" value="no" checked></div><div class="radio_input_text">No</div>
                                                                           </div>
                                                                        </div>		

                                                                        <div class="cfg_quest_item_label">
                                                                           <span class="icon-leaf"></span> Randomize questions
                                                                        </div>									
                                                                        <div class="cfg_quest_item_component">
                                                                           <div class="container_row">
                                                                                  <div class="radio_input"><input type="radio" name="group1" value="no" checked></div><div class="radio_input_text">Yes</div>
                                                                                  <div class="radio_input"><input type="radio" name="group1" value="no" checked></div><div class="radio_input_text">No</div>
                                                                           </div>
                                                                        </div>	

                                                                        <div class="cfg_quest_item_label">
                                                                           <span class="icon-leaf"></span> Randomize responses
                                                                        </div>									
                                                                        <div class="cfg_quest_item_component">
                                                                           <div class="container_row">
                                                                                  <div class="radio_input"><input type="radio" name="group1" value="no" checked></div><div class="radio_input_text">Yes</div>
                                                                                  <div class="radio_input"><input type="radio" name="group1" value="no" checked></div><div class="radio_input_text">No</div>
                                                                           </div>
                                                                        </div>	

                                                                        <div class="cfg_quest_item_label">
                                                                           <i class="icon-leaf"></i> Comment
                                                                        </div>									
                                                                        <div  class="cfg_quest_item_component">
                                                                          <textarea id="45" class="questionnaire_comment"></textarea>
                                                                        </div>
                                                                </div>
                                                        </div>				
                                                        <!-- QUESTION TAB -->
                                                        <div id="tab_2" title="Config question" data-options="" style="">								

                                                                <div class="cfg_quest_items">								

                                                                        <div class="cfg_quest_item_label">
                                                                           <span class="icon-leaf"></span> Question type
                                                                        </div>									
                                                                        <div class="cfg_quest_item_component">
                                                                                <input type="radio" name="group1" value="yes"> Conditionnal 
                                                                                <input type="radio" name="group1" value="no" checked> Not conditionnal 
                                                                        </div>	

                                                                        <div  class="cfg_quest_item_label">
                                                                           <span class="icon-leaf"></span> Question text 
                                                                        </div>									
                                                                        <div class="cfg_quest_item_component">
                                                                          <textarea id="88" class="questionnaire_comment">Ma question</textarea>
                                                                        </div>	

                                                                        <div class="cfg_quest_item_label">
                                                                           <span class="icon-leaf"></span> Response type 
                                                                        </div>									
                                                                        <div class="cfg_quest_item_component">
                                                                          <select class="" name="state" 
                                                                          style="width:200px;">
                                                                                        <option value="">Simple text</option>
                                                                                        <option value="">Number</option>
                                                                                        <option value="">Date</option>
                                                                                        <option value="">QCM exclusive</option>
                                                                                        <option value="">QCM inclusive</option>
                                                                                </select>
                                                                        </div>																		

                                                                        <div class="cfg_quest_item_label">
                                                                           <span class="icon-leaf"></span> Keys 
                                                                        </div>									
                                                                        <div class="cfg_quest_item_component">
                                                                          <select class="" name="state" style="width:200px;" multiple >
                                                                                        <option value="AL">Alabama</option>
                                                                                        <option value="AK">Alaska</option>
                                                                                        <option value="AZ">Arizona</option>
                                                                                        <option value="AR">Arkansas</option>
                                                                                        <option value="CA">California</option>
                                                                                        <option value="CO">Colorado</option>
                                                                                        <option value="CT">Connecticut</option>
                                                                                </select>
                                                                        </div>	

                                                                        <div class="cfg_quest_item_label">
                                                                           <span class="icon-leaf"></span> Weight of this question
                                                                        </div>									
                                                                        <div class="cfg_quest_item_component">
                                                                          <input class="" value="45"></input>
                                                                        </div>	

                                                                        <div class="cfg_quest_item_label">
                                                                           <span class="icon-leaf"></span> Difficulty for creator 
                                                                        </div>									
                                                                        <div class="cfg_quest_item_component">
                                                                          <input class="" value="45"></input>
                                                                        </div>										

                                                                        <div class="cfg_quest_item_label">
                                                                           <span class="icon-leaf"></span> Difficulty for answerer 
                                                                        </div>									
                                                                        <div class="cfg_quest_item_component">
                                                                          <input class="" value="45"></input>
                                                                        </div>	

                                                                        <div class="cfg_quest_item_label">
                                                                           <span class="icon-leaf"></span> Covering ratio 
                                                                        </div>									
                                                                        <div class="cfg_quest_item_component">
                                                                          <input class="" value="45"></input>
                                                                        </div>										

                                                                        <div class="cfg_quest_item_label">
                                                                           <span class="icon-leaf"></span> Comment 
                                                                        </div>	
                                                                        <div class="cfg_quest_item_component">
                                                                          <textarea class="questionnaire_comment"></textarea>
                                                                        </div>											

                                                                </div>	

                                                        </div>

                                        </div>
                                         <!-- button close panel -->
                                         <div class="btn_close_panel">
                                                 <a  class="easyui-linkbutton" id="close_panel">Close</a>
                                         </div>							
                                </div>
                     </div><!-- wrap panel end -->
                        
                    <!-- treegrid dynamic with js -->
                    
                    <div id="id_wrap_panel" class="wrap_panel" >
                        <div class="span12">
                            <table id="tgd" class="easyui-treegrid" title="TreeGrid Actions" style="width:100%;height:auto"
                                       data-options="
                                           iconCls: 'icon-ok',
                                           rownumbers: true,
                                           animate: true,
                                           collapsible: true,
                                           fitColumns: true,
                                           method: 'get',
                                           idField: 'id',
                                           treeField: 'name'
                                       ">
                                   <thead>
                                       <tr>
                                           <th data-options="field:'name',width:180">Task Name</th>
                                           <th data-options="field:'persons',width:60,align:'right'">Persons</th>
                                           <th data-options="field:'begin',width:80">Begin Date</th>
                                           <th data-options="field:'end',width:80">End Date</th>
                                           <th data-options="field:'progress',width:120,formatter:formatProgress">Progress</th>
                                       </tr>
                                   </thead>
                               </table>
                        </div>                        
                    </div>  
                    <!-- end class row -->
                               <script type="text/javascript">
                                   function formatProgress(value){
                                       if (value){
                                           var s = '<div style="width:100%;border:1px solid #ccc">' +
                                                   '<div style="width:' + value + '%;background:#cc0000;color:#fff">' + value + '%' + '</div>'
                                                   '</div>';
                                           return s;
                                       } else {
                                           return '';
                                       }
                                   }
                                   function collapseAll(){
                                       $('#tg').treegrid('collapseAll');
                                   }
                                   function expandAll(){
                                       $('#tg').treegrid('expandAll');
                                   }
                                   function expandTo(){
                                       $('#tg').treegrid('expandTo',21).treegrid('select',21);
                                   }
                               </script>
	        <!-- Footer Section -->
	        <hr>
	        <div class="row">
				<div class="trans_letters">
				   <div class="span4">
						<h4 class="muted text-center">Meet Our Clients</h4>
						<div class="under_text">
						   <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>						
						   <a href="#" class="btn"><i class="icon-user"></i> Our Clients</a>
						</div>
					</div>
					<div class="span4">
						<h4 class="muted text-center">Know Our Employees</h4>
						<div class="under_text">
						   <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
						
						   <a href="#" class="btn btn-success"><i class="icon-star icon-white"></i> Our Employees</a>
						</div>
					</div>
					<div class="span4">
						<h4 class="muted text-center">Reach Us</h4>
						<div class="under_text">
						   <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
						   <a href="#" class="btn btn-info">Contact Us</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Copyright Area -->
			<hr>
			<div class="footer">
				<p>&copy; 2014</p>
			</div>
         </div>
        <script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>       
		
		<script src="<?php echo $workflow->href_public; ?>/js/modules/questionnaires/questionnaires1.js"></script>
	</body>
</html>
