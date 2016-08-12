<?php

/* base.html.twig */
class __TwigTemplate_98d427071f9d039fb891434a52ca6ce3a322ac88b95da47dd87aa7bea65a9070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_361c808d89cedd2f3962c47cc1e5a1179b8f8e40d6ba9651d914d72970ef0397 = $this->env->getExtension("native_profiler");
        $__internal_361c808d89cedd2f3962c47cc1e5a1179b8f8e40d6ba9651d914d72970ef0397->enter($__internal_361c808d89cedd2f3962c47cc1e5a1179b8f8e40d6ba9651d914d72970ef0397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_361c808d89cedd2f3962c47cc1e5a1179b8f8e40d6ba9651d914d72970ef0397->leave($__internal_361c808d89cedd2f3962c47cc1e5a1179b8f8e40d6ba9651d914d72970ef0397_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc18d82a9d410a5a167cf34970a4f2bfdbd95a251a17f5a07a74ba695e0bed58 = $this->env->getExtension("native_profiler");
        $__internal_dc18d82a9d410a5a167cf34970a4f2bfdbd95a251a17f5a07a74ba695e0bed58->enter($__internal_dc18d82a9d410a5a167cf34970a4f2bfdbd95a251a17f5a07a74ba695e0bed58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dc18d82a9d410a5a167cf34970a4f2bfdbd95a251a17f5a07a74ba695e0bed58->leave($__internal_dc18d82a9d410a5a167cf34970a4f2bfdbd95a251a17f5a07a74ba695e0bed58_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a6e548c175ce24e2440601db7cf8d7f0d982a744a9eb4ae9c6cadd449cba883 = $this->env->getExtension("native_profiler");
        $__internal_5a6e548c175ce24e2440601db7cf8d7f0d982a744a9eb4ae9c6cadd449cba883->enter($__internal_5a6e548c175ce24e2440601db7cf8d7f0d982a744a9eb4ae9c6cadd449cba883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5a6e548c175ce24e2440601db7cf8d7f0d982a744a9eb4ae9c6cadd449cba883->leave($__internal_5a6e548c175ce24e2440601db7cf8d7f0d982a744a9eb4ae9c6cadd449cba883_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd3750393c0a7d7ef00b0073d55ed4f6bc6995a1b6da5d1e5f96e8ed27524c71 = $this->env->getExtension("native_profiler");
        $__internal_dd3750393c0a7d7ef00b0073d55ed4f6bc6995a1b6da5d1e5f96e8ed27524c71->enter($__internal_dd3750393c0a7d7ef00b0073d55ed4f6bc6995a1b6da5d1e5f96e8ed27524c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dd3750393c0a7d7ef00b0073d55ed4f6bc6995a1b6da5d1e5f96e8ed27524c71->leave($__internal_dd3750393c0a7d7ef00b0073d55ed4f6bc6995a1b6da5d1e5f96e8ed27524c71_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5417d1955458412b22e67cb52a1747e4502d44e42da1be127fec76d1f1bfbb8a = $this->env->getExtension("native_profiler");
        $__internal_5417d1955458412b22e67cb52a1747e4502d44e42da1be127fec76d1f1bfbb8a->enter($__internal_5417d1955458412b22e67cb52a1747e4502d44e42da1be127fec76d1f1bfbb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5417d1955458412b22e67cb52a1747e4502d44e42da1be127fec76d1f1bfbb8a->leave($__internal_5417d1955458412b22e67cb52a1747e4502d44e42da1be127fec76d1f1bfbb8a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
