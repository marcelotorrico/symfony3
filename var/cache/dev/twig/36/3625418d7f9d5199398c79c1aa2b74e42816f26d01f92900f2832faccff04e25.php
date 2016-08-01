<?php

/* layout.html.twig */
class __TwigTemplate_7f597df09ad02bbcb67b9313d847b98fd86af2677119567ec1c70c64e57186c8 extends Twig_Template
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
        $__internal_c7b2f18a8ae4b2f5a55ab7a03d37777736d2f4a9dbc9d609642302ee9fa902a3 = $this->env->getExtension("native_profiler");
        $__internal_c7b2f18a8ae4b2f5a55ab7a03d37777736d2f4a9dbc9d609642302ee9fa902a3->enter($__internal_c7b2f18a8ae4b2f5a55ab7a03d37777736d2f4a9dbc9d609642302ee9fa902a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_c7b2f18a8ae4b2f5a55ab7a03d37777736d2f4a9dbc9d609642302ee9fa902a3->leave($__internal_c7b2f18a8ae4b2f5a55ab7a03d37777736d2f4a9dbc9d609642302ee9fa902a3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c45afac90559f3db0256540aa5d619234a849ad38d3d251110edc39ad321a595 = $this->env->getExtension("native_profiler");
        $__internal_c45afac90559f3db0256540aa5d619234a849ad38d3d251110edc39ad321a595->enter($__internal_c45afac90559f3db0256540aa5d619234a849ad38d3d251110edc39ad321a595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_c45afac90559f3db0256540aa5d619234a849ad38d3d251110edc39ad321a595->leave($__internal_c45afac90559f3db0256540aa5d619234a849ad38d3d251110edc39ad321a595_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_865864ef020d937b93d1dbbfb8eb16096e1ec7f6f97eab7ace494fe2045c17cf = $this->env->getExtension("native_profiler");
        $__internal_865864ef020d937b93d1dbbfb8eb16096e1ec7f6f97eab7ace494fe2045c17cf->enter($__internal_865864ef020d937b93d1dbbfb8eb16096e1ec7f6f97eab7ace494fe2045c17cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/estilos/principal.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_865864ef020d937b93d1dbbfb8eb16096e1ec7f6f97eab7ace494fe2045c17cf->leave($__internal_865864ef020d937b93d1dbbfb8eb16096e1ec7f6f97eab7ace494fe2045c17cf_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_78983cff084df80d5e8707fefe41cecceb1787ed0cb01f31e60ed16f1e64d9ff = $this->env->getExtension("native_profiler");
        $__internal_78983cff084df80d5e8707fefe41cecceb1787ed0cb01f31e60ed16f1e64d9ff->enter($__internal_78983cff084df80d5e8707fefe41cecceb1787ed0cb01f31e60ed16f1e64d9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_78983cff084df80d5e8707fefe41cecceb1787ed0cb01f31e60ed16f1e64d9ff->leave($__internal_78983cff084df80d5e8707fefe41cecceb1787ed0cb01f31e60ed16f1e64d9ff_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7594bc4377d008b4bc7600f3309cb1a2bcc39a9d15221fee692d039b05161b2e = $this->env->getExtension("native_profiler");
        $__internal_7594bc4377d008b4bc7600f3309cb1a2bcc39a9d15221fee692d039b05161b2e->enter($__internal_7594bc4377d008b4bc7600f3309cb1a2bcc39a9d15221fee692d039b05161b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_7594bc4377d008b4bc7600f3309cb1a2bcc39a9d15221fee692d039b05161b2e->leave($__internal_7594bc4377d008b4bc7600f3309cb1a2bcc39a9d15221fee692d039b05161b2e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 18,  113 => 17,  107 => 16,  97 => 14,  91 => 13,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 20,  47 => 16,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Login{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('public/estilos/principal.css') }}" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*             {{ include('menu.html.twig')}}*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('public/js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* {# empty Twig template #}*/
