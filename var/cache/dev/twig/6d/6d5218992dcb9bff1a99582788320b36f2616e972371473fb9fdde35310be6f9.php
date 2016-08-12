<?php

/* listUsers.html.twig */
class __TwigTemplate_347aa14ea7e506952f7f6644bd905c9ebb9b90092e75c956c4960665e75dd7f8 extends Twig_Template
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
        $__internal_2458ba9e304e203ab1de61c274bcd289137a94c2bae17ce9b625089de18d0180 = $this->env->getExtension("native_profiler");
        $__internal_2458ba9e304e203ab1de61c274bcd289137a94c2bae17ce9b625089de18d0180->enter($__internal_2458ba9e304e203ab1de61c274bcd289137a94c2bae17ce9b625089de18d0180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listUsers.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<h1>Your lucky number is ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), "html", null, true);
        echo "</h1>";
        
        $__internal_2458ba9e304e203ab1de61c274bcd289137a94c2bae17ce9b625089de18d0180->leave($__internal_2458ba9e304e203ab1de61c274bcd289137a94c2bae17ce9b625089de18d0180_prof);

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
        return array (  25 => 3,  22 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.html.twig #}*/
/* <!DOCTYPE html>*/
/* <h1>Your lucky number is {{ number }}</h1>*/
