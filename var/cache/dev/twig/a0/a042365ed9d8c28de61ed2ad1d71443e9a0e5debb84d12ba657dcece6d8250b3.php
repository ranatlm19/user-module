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
        $__internal_3fc9ae0b0f9dff8a8bd917d17fd32879d24d65fd0b51c3ef763642c7e96caeda = $this->env->getExtension("native_profiler");
        $__internal_3fc9ae0b0f9dff8a8bd917d17fd32879d24d65fd0b51c3ef763642c7e96caeda->enter($__internal_3fc9ae0b0f9dff8a8bd917d17fd32879d24d65fd0b51c3ef763642c7e96caeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fc9ae0b0f9dff8a8bd917d17fd32879d24d65fd0b51c3ef763642c7e96caeda->leave($__internal_3fc9ae0b0f9dff8a8bd917d17fd32879d24d65fd0b51c3ef763642c7e96caeda_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_93e0ab0cec8ea7cf54a4033e6e489c17daece47ed41d5c2deadcc10a3eb6a1b7 = $this->env->getExtension("native_profiler");
        $__internal_93e0ab0cec8ea7cf54a4033e6e489c17daece47ed41d5c2deadcc10a3eb6a1b7->enter($__internal_93e0ab0cec8ea7cf54a4033e6e489c17daece47ed41d5c2deadcc10a3eb6a1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_93e0ab0cec8ea7cf54a4033e6e489c17daece47ed41d5c2deadcc10a3eb6a1b7->leave($__internal_93e0ab0cec8ea7cf54a4033e6e489c17daece47ed41d5c2deadcc10a3eb6a1b7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcae7b0f7d450fef6efc2754a63eaab0547a24d8cbb386d02a67a1c32588baaf = $this->env->getExtension("native_profiler");
        $__internal_dcae7b0f7d450fef6efc2754a63eaab0547a24d8cbb386d02a67a1c32588baaf->enter($__internal_dcae7b0f7d450fef6efc2754a63eaab0547a24d8cbb386d02a67a1c32588baaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dcae7b0f7d450fef6efc2754a63eaab0547a24d8cbb386d02a67a1c32588baaf->leave($__internal_dcae7b0f7d450fef6efc2754a63eaab0547a24d8cbb386d02a67a1c32588baaf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a6046d2ada4f7f64e978f5089c7f8e68e4692d3922eb703ccd985c082baf490 = $this->env->getExtension("native_profiler");
        $__internal_6a6046d2ada4f7f64e978f5089c7f8e68e4692d3922eb703ccd985c082baf490->enter($__internal_6a6046d2ada4f7f64e978f5089c7f8e68e4692d3922eb703ccd985c082baf490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6a6046d2ada4f7f64e978f5089c7f8e68e4692d3922eb703ccd985c082baf490->leave($__internal_6a6046d2ada4f7f64e978f5089c7f8e68e4692d3922eb703ccd985c082baf490_prof);

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
