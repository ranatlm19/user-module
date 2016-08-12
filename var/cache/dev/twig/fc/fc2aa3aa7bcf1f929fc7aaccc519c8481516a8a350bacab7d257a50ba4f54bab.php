<?php

/* listUsers.html.twig */
class __TwigTemplate_1b2db2e3ed10ee0771c0a5bb70cf1a8a3929c78861db1339c0fb2f577d217cbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbf0a916cebe4a5e9b255591a292871d0bd3b4692a5b15567f495a8e1e402528 = $this->env->getExtension("native_profiler");
        $__internal_cbf0a916cebe4a5e9b255591a292871d0bd3b4692a5b15567f495a8e1e402528->enter($__internal_cbf0a916cebe4a5e9b255591a292871d0bd3b4692a5b15567f495a8e1e402528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listUsers.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<!-- Latest compiled and minified CSS -->
\t<link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
\t<!-- <link rel=\"stylesheet\" href=\"/web/bundles/framework/css/style.css\"> -->
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\">
\t<!-- jQuery library -->
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t<!-- Latest compiled JavaScript -->
\t<script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js\"></script>

\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/utility.js"), "html", null, true);
        echo "\"></script>

\t<meta charset=\"utf-8\"> 
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>User Module</title>
</head>
<body>
\t<div class=\"container\">
\t\t<h1>User Module</h1>
\t\t<div class=\"panel panel-primary col-sm-8 nopadding\">
\t\t\t<div class=\"panel-heading\">All Users</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<ul class=\"list-group\" id=\"list-users\">
\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["all_users"]) ? $context["all_users"] : $this->getContext($context, "all_users")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 29
            echo "\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-8\"> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "user_name", array()), "html", null, true);
            echo " </div>
\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "user_id", array()), "html", null, true);
            echo "\" class=\"this-user-id\">
\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "user_name", array()), "html", null, true);
            echo "\" class=\"this-user-name\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\"> <a href=\"#\" onclick=\"openModal(event)\">Reporting Rights</a> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t\t</ul>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#addNewUserModal\">Add user</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-7\"></div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 45
        if (((isset($context["page_no"]) ? $context["page_no"] : $this->getContext($context, "page_no")) > 1)) {
            // line 46
            echo "\t\t\t\t\t\t<a href=\"/listUsers/";
            echo twig_escape_filter($this->env, ((isset($context["page_no"]) ? $context["page_no"] : $this->getContext($context, "page_no")) - 1), "html", null, true);
            echo "\" class=\"btn btn-default btn-sm\" role=\"button\">Prev</a>
\t\t\t\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default btn-sm disabled\" role=\"button\">Prev</a>
\t\t\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t\t\t<a href=\"/listUsers/";
        echo twig_escape_filter($this->env, ((isset($context["page_no"]) ? $context["page_no"] : $this->getContext($context, "page_no")) + 1), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm\" role=\"button\">Next</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"addNewUserModal\" class=\"modal fade\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t\t<h4 class=\"modal-title\">Add a new user</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"new-user-name\" name=\"new-user-name\" placeholder=\"Enter name\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-cloud-upload\" id=\"add-new-user-modal-message\"> Wait...</span>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary add-new-user-btn\" id=\"add-new-user-btn\">Save</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"reporting-rights-modal\" class=\"modal fade\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<!-- Modal content-->
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t\t<h4 class=\"modal-title\">Reporting Rights</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"hidden\" id=\"current_user_id\" value=\"-1\">
\t\t\t\t\t\t\t<input type=\"hidden\" id=\"current_user_name\" value=\"-1\">
\t\t\t\t\t\t\t<div class=\"panel panel-success\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\" id=\"report-to-heading\">People reporting to you</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-group\" id=\"reporting-to-user-list\">
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-8\">
\t\t\t\t\t\t\t\t\t\t<label for=\"reporting-user\" id=\"report-to-label\">Add people reporting to User</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"reporting-user\" list=\"rep-user-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<datalist id=\"rep-user-list\">
\t\t\t\t\t\t\t\t\t\t\t\t</datalist>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" id=\"add-rep-user\">Add</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"\"></ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"panel panel-info\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\" id=\"user-report-to-heading\">People you report to</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-group\" id=\"user-reports-to-list\">

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-8\">
\t\t\t\t\t\t\t\t\t\t<label for=\"reporting-to-user\" id=\"user-report-to-label\">Add people User reports to</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"reporting-to-user\" list=\"user-rep-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<datalist id=\"user-rep-list\">
\t\t\t\t\t\t\t\t\t\t\t\t</datalist>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" id=\"add-user-rep\">Add</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</body>
\t</html>";
        
        $__internal_cbf0a916cebe4a5e9b255591a292871d0bd3b4692a5b15567f495a8e1e402528->leave($__internal_cbf0a916cebe4a5e9b255591a292871d0bd3b4692a5b15567f495a8e1e402528_prof);

    }

    public function getTemplateName()
    {
        return "listUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 50,  101 => 48,  95 => 46,  93 => 45,  84 => 38,  73 => 33,  69 => 32,  65 => 31,  61 => 29,  57 => 28,  41 => 15,  30 => 7,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* 	<!-- Latest compiled and minified CSS -->*/
/* 	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">*/
/* 	<!-- <link rel="stylesheet" href="/web/bundles/framework/css/style.css"> -->*/
/* 	<link rel="stylesheet" href="{{ asset('bundles/framework/css/style.css') }}">*/
/* 	<!-- jQuery library -->*/
/* 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>*/
/* 	<!-- Latest compiled JavaScript -->*/
/* 	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>*/
/* */
/* 	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>*/
/* */
/* 	<script src="{{ asset('bundles/framework/js/utility.js') }}"></script>*/
/* */
/* 	<meta charset="utf-8"> */
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	<title>User Module</title>*/
/* </head>*/
/* <body>*/
/* 	<div class="container">*/
/* 		<h1>User Module</h1>*/
/* 		<div class="panel panel-primary col-sm-8 nopadding">*/
/* 			<div class="panel-heading">All Users</div>*/
/* 			<div class="panel-body">*/
/* 				<ul class="list-group" id="list-users">*/
/* 					{% for item in all_users %}*/
/* 					<li class="list-group-item">*/
/* 						<div class="row">*/
/* 							<div class="col-sm-8"> {{ item.user_name }} </div>*/
/* 							<input type="hidden" value="{{ item.user_id }}" class="this-user-id">*/
/* 							<input type="hidden" value="{{ item.user_name }}" class="this-user-name">*/
/* 							<div class="col-sm-4"> <a href="#" onclick="openModal(event)">Reporting Rights</a> </div>*/
/* 						</div>*/
/* 					</li>*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 				<div class="row">*/
/* 					<div class="col-sm-2">*/
/* 						<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addNewUserModal">Add user</button>*/
/* 					</div>*/
/* 					<div class="col-sm-7"></div>*/
/* 					<div class="col-sm-3">*/
/* 						{% if page_no > 1 %}*/
/* 						<a href="/listUsers/{{ (page_no - 1) }}" class="btn btn-default btn-sm" role="button">Prev</a>*/
/* 						{% else %}*/
/* 						<a href="#" class="btn btn-default btn-sm disabled" role="button">Prev</a>*/
/* 						{% endif %}*/
/* 						<a href="/listUsers/{{ (page_no + 1) }}" class="btn btn-default btn-sm" role="button">Next</a>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div id="addNewUserModal" class="modal fade" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 				<div class="modal-content">*/
/* 					<div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 						<h4 class="modal-title">Add a new user</h4>*/
/* 					</div>*/
/* 					<div class="modal-body">*/
/* 						<div class="row">*/
/* 							<div class="col-sm-6">*/
/* 								<input type="text" class="form-control" id="new-user-name" name="new-user-name" placeholder="Enter name" required>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<span class="glyphicon glyphicon-cloud-upload" id="add-new-user-modal-message"> Wait...</span>*/
/* 						<button type="button" class="btn btn-primary add-new-user-btn" id="add-new-user-btn">Save</button>*/
/* 						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div id="reporting-rights-modal" class="modal fade" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 				<!-- Modal content-->*/
/* 				<div class="modal-content">*/
/* 					<div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 						<h4 class="modal-title">Reporting Rights</h4>*/
/* 					</div>*/
/* 					<div class="modal-body">*/
/* 						<div class="form-group">*/
/* 							<input type="hidden" id="current_user_id" value="-1">*/
/* 							<input type="hidden" id="current_user_name" value="-1">*/
/* 							<div class="panel panel-success">*/
/* 								<div class="panel-heading" id="report-to-heading">People reporting to you</div>*/
/* 								<div class="panel-body">*/
/* 									<ul class="list-group" id="reporting-to-user-list">*/
/* 									</ul>*/
/* 									<div class="col-xs-8">*/
/* 										<label for="reporting-user" id="report-to-label">Add people reporting to User</label>*/
/* 										<div class="row">*/
/* 											<div class="col-sm-9">*/
/* 												<input type="text" class="form-control" id="reporting-user" list="rep-user-list">*/
/* 												<datalist id="rep-user-list">*/
/* 												</datalist>*/
/* 											</div>*/
/* 											<div class="col-sm-3">*/
/* 												<button type="button" class="btn btn-primary" id="add-rep-user">Add</button>*/
/* 											</div>*/
/* 										</div>*/
/* 										<ul class=""></ul>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<div class="panel panel-info">*/
/* 								<div class="panel-heading" id="user-report-to-heading">People you report to</div>*/
/* 								<div class="panel-body">*/
/* 									<ul class="list-group" id="user-reports-to-list">*/
/* */
/* 									</ul>*/
/* 									<div class="col-xs-8">*/
/* 										<label for="reporting-to-user" id="user-report-to-label">Add people User reports to</label>*/
/* 										<div class="row">*/
/* 											<div class="col-sm-9">*/
/* 												<input type="text" class="form-control" id="reporting-to-user" list="user-rep-list">*/
/* 												<datalist id="user-rep-list">*/
/* 												</datalist>*/
/* 											</div>*/
/* 											<div class="col-sm-3">*/
/* 												<button type="button" class="btn btn-primary" id="add-user-rep">Add</button>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</body>*/
/* 	</html>*/
