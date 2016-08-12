<?php

/* base.html.twig */
class __TwigTemplate_ba12f351c979a61608f3d4d822f6aa6614b61ee4effba6e4618625bf33d24a19 extends Twig_Template
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
        $__internal_a9dae769572825a9eb4c1585a022c7dc3c57cd238aea4dcd3b9d3647f5157478 = $this->env->getExtension("native_profiler");
        $__internal_a9dae769572825a9eb4c1585a022c7dc3c57cd238aea4dcd3b9d3647f5157478->enter($__internal_a9dae769572825a9eb4c1585a022c7dc3c57cd238aea4dcd3b9d3647f5157478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a9dae769572825a9eb4c1585a022c7dc3c57cd238aea4dcd3b9d3647f5157478->leave($__internal_a9dae769572825a9eb4c1585a022c7dc3c57cd238aea4dcd3b9d3647f5157478_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4e071e36bdf9c48a44c0a2ffdab5f5e8865e2b60a9fc81a7edb3eaca47310bc = $this->env->getExtension("native_profiler");
        $__internal_c4e071e36bdf9c48a44c0a2ffdab5f5e8865e2b60a9fc81a7edb3eaca47310bc->enter($__internal_c4e071e36bdf9c48a44c0a2ffdab5f5e8865e2b60a9fc81a7edb3eaca47310bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c4e071e36bdf9c48a44c0a2ffdab5f5e8865e2b60a9fc81a7edb3eaca47310bc->leave($__internal_c4e071e36bdf9c48a44c0a2ffdab5f5e8865e2b60a9fc81a7edb3eaca47310bc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9713b0ffea0e682d1cff4b4c92cdd11fc7b9c49d760243d3b0b6878dadd947b0 = $this->env->getExtension("native_profiler");
        $__internal_9713b0ffea0e682d1cff4b4c92cdd11fc7b9c49d760243d3b0b6878dadd947b0->enter($__internal_9713b0ffea0e682d1cff4b4c92cdd11fc7b9c49d760243d3b0b6878dadd947b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9713b0ffea0e682d1cff4b4c92cdd11fc7b9c49d760243d3b0b6878dadd947b0->leave($__internal_9713b0ffea0e682d1cff4b4c92cdd11fc7b9c49d760243d3b0b6878dadd947b0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3005cd449703963d82678c3587d2e4a0ecbf2743145522678e9df0bda5045f8 = $this->env->getExtension("native_profiler");
        $__internal_a3005cd449703963d82678c3587d2e4a0ecbf2743145522678e9df0bda5045f8->enter($__internal_a3005cd449703963d82678c3587d2e4a0ecbf2743145522678e9df0bda5045f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a3005cd449703963d82678c3587d2e4a0ecbf2743145522678e9df0bda5045f8->leave($__internal_a3005cd449703963d82678c3587d2e4a0ecbf2743145522678e9df0bda5045f8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_44a8fe7db6093238293abb6b6247f9515645a9a2de6d29e07df080f72bea3791 = $this->env->getExtension("native_profiler");
        $__internal_44a8fe7db6093238293abb6b6247f9515645a9a2de6d29e07df080f72bea3791->enter($__internal_44a8fe7db6093238293abb6b6247f9515645a9a2de6d29e07df080f72bea3791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_44a8fe7db6093238293abb6b6247f9515645a9a2de6d29e07df080f72bea3791->leave($__internal_44a8fe7db6093238293abb6b6247f9515645a9a2de6d29e07df080f72bea3791_prof);

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
