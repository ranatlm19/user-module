<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7975592b1aa936fdd4c8c995127716de2cd54f1be1f0c8691ce14ceaa7b16611 extends Twig_Template
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
        $__internal_598b882ed983ba898f1aec026925e144aa171650f2f2401a7afe7afa83cc6873 = $this->env->getExtension("native_profiler");
        $__internal_598b882ed983ba898f1aec026925e144aa171650f2f2401a7afe7afa83cc6873->enter($__internal_598b882ed983ba898f1aec026925e144aa171650f2f2401a7afe7afa83cc6873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_598b882ed983ba898f1aec026925e144aa171650f2f2401a7afe7afa83cc6873->leave($__internal_598b882ed983ba898f1aec026925e144aa171650f2f2401a7afe7afa83cc6873_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4220ebbbfd6d27817327eeda15e30aff3e9117429c4d155a691d56f6763b19fb = $this->env->getExtension("native_profiler");
        $__internal_4220ebbbfd6d27817327eeda15e30aff3e9117429c4d155a691d56f6763b19fb->enter($__internal_4220ebbbfd6d27817327eeda15e30aff3e9117429c4d155a691d56f6763b19fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4220ebbbfd6d27817327eeda15e30aff3e9117429c4d155a691d56f6763b19fb->leave($__internal_4220ebbbfd6d27817327eeda15e30aff3e9117429c4d155a691d56f6763b19fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b27e0336130df1c7f26a80ef7257aa1bb08a843ba9fe121344cd773048a0a30 = $this->env->getExtension("native_profiler");
        $__internal_9b27e0336130df1c7f26a80ef7257aa1bb08a843ba9fe121344cd773048a0a30->enter($__internal_9b27e0336130df1c7f26a80ef7257aa1bb08a843ba9fe121344cd773048a0a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9b27e0336130df1c7f26a80ef7257aa1bb08a843ba9fe121344cd773048a0a30->leave($__internal_9b27e0336130df1c7f26a80ef7257aa1bb08a843ba9fe121344cd773048a0a30_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e66a6a314494d96d82171ead9642ffba7c4d1d367728646a3fde6c317335d03a = $this->env->getExtension("native_profiler");
        $__internal_e66a6a314494d96d82171ead9642ffba7c4d1d367728646a3fde6c317335d03a->enter($__internal_e66a6a314494d96d82171ead9642ffba7c4d1d367728646a3fde6c317335d03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e66a6a314494d96d82171ead9642ffba7c4d1d367728646a3fde6c317335d03a->leave($__internal_e66a6a314494d96d82171ead9642ffba7c4d1d367728646a3fde6c317335d03a_prof);

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
