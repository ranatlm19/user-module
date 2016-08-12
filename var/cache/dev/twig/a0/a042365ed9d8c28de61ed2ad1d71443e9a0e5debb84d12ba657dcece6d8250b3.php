<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_86d1df4ef9fb26f2ea85ba3bbfd756d817a2143a3856e61152d5f55d49a46ad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39f4a4f5af0e5376083e0943d712e357934071d7e9fc81085a754ecd3e343628 = $this->env->getExtension("native_profiler");
        $__internal_39f4a4f5af0e5376083e0943d712e357934071d7e9fc81085a754ecd3e343628->enter($__internal_39f4a4f5af0e5376083e0943d712e357934071d7e9fc81085a754ecd3e343628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39f4a4f5af0e5376083e0943d712e357934071d7e9fc81085a754ecd3e343628->leave($__internal_39f4a4f5af0e5376083e0943d712e357934071d7e9fc81085a754ecd3e343628_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c9b7ae297bda31d10f9f255f4dad8919eef71f6927028acb84146c37b70d6f60 = $this->env->getExtension("native_profiler");
        $__internal_c9b7ae297bda31d10f9f255f4dad8919eef71f6927028acb84146c37b70d6f60->enter($__internal_c9b7ae297bda31d10f9f255f4dad8919eef71f6927028acb84146c37b70d6f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c9b7ae297bda31d10f9f255f4dad8919eef71f6927028acb84146c37b70d6f60->leave($__internal_c9b7ae297bda31d10f9f255f4dad8919eef71f6927028acb84146c37b70d6f60_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_44c5a1e981f14e5224d58b02a10cec901704cbb90e288703d9ae169b5adb99cf = $this->env->getExtension("native_profiler");
        $__internal_44c5a1e981f14e5224d58b02a10cec901704cbb90e288703d9ae169b5adb99cf->enter($__internal_44c5a1e981f14e5224d58b02a10cec901704cbb90e288703d9ae169b5adb99cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_44c5a1e981f14e5224d58b02a10cec901704cbb90e288703d9ae169b5adb99cf->leave($__internal_44c5a1e981f14e5224d58b02a10cec901704cbb90e288703d9ae169b5adb99cf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_728c91b6d834752d98d023bfa595877a5e35512e347b656d809e57304da530d4 = $this->env->getExtension("native_profiler");
        $__internal_728c91b6d834752d98d023bfa595877a5e35512e347b656d809e57304da530d4->enter($__internal_728c91b6d834752d98d023bfa595877a5e35512e347b656d809e57304da530d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_728c91b6d834752d98d023bfa595877a5e35512e347b656d809e57304da530d4->leave($__internal_728c91b6d834752d98d023bfa595877a5e35512e347b656d809e57304da530d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
