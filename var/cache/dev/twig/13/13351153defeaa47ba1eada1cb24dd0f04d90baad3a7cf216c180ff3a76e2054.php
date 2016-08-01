<?php

/* base.html.twig */
class __TwigTemplate_f5a95789e880fa3155f7f1b278d25f5de0f96aaf8c3d24bb3bdfd5db74928957 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f205cbea167ee10235f8d390f9e968f8622759e0ef3e73c4715830306e2600d = $this->env->getExtension("native_profiler");
        $__internal_6f205cbea167ee10235f8d390f9e968f8622759e0ef3e73c4715830306e2600d->enter($__internal_6f205cbea167ee10235f8d390f9e968f8622759e0ef3e73c4715830306e2600d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_6f205cbea167ee10235f8d390f9e968f8622759e0ef3e73c4715830306e2600d->leave($__internal_6f205cbea167ee10235f8d390f9e968f8622759e0ef3e73c4715830306e2600d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3efe595cde74598410505a97398c013ccce1ce8655e08c93e43a1b0382d228f = $this->env->getExtension("native_profiler");
        $__internal_a3efe595cde74598410505a97398c013ccce1ce8655e08c93e43a1b0382d228f->enter($__internal_a3efe595cde74598410505a97398c013ccce1ce8655e08c93e43a1b0382d228f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_a3efe595cde74598410505a97398c013ccce1ce8655e08c93e43a1b0382d228f->leave($__internal_a3efe595cde74598410505a97398c013ccce1ce8655e08c93e43a1b0382d228f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6b39bd81941aeb0d63a44ca654dfb7900699af3a2679ffe815850fe0c306a232 = $this->env->getExtension("native_profiler");
        $__internal_6b39bd81941aeb0d63a44ca654dfb7900699af3a2679ffe815850fe0c306a232->enter($__internal_6b39bd81941aeb0d63a44ca654dfb7900699af3a2679ffe815850fe0c306a232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/estilos/principal.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_6b39bd81941aeb0d63a44ca654dfb7900699af3a2679ffe815850fe0c306a232->leave($__internal_6b39bd81941aeb0d63a44ca654dfb7900699af3a2679ffe815850fe0c306a232_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4abc92c34cc61c29be82aa906c62eb3e5b83c62badac289cd40742d60da55c96 = $this->env->getExtension("native_profiler");
        $__internal_4abc92c34cc61c29be82aa906c62eb3e5b83c62badac289cd40742d60da55c96->enter($__internal_4abc92c34cc61c29be82aa906c62eb3e5b83c62badac289cd40742d60da55c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_4abc92c34cc61c29be82aa906c62eb3e5b83c62badac289cd40742d60da55c96->leave($__internal_4abc92c34cc61c29be82aa906c62eb3e5b83c62badac289cd40742d60da55c96_prof);

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
        return array (  98 => 15,  93 => 14,  87 => 13,  78 => 8,  73 => 7,  67 => 6,  55 => 5,  46 => 17,  44 => 13,  37 => 10,  35 => 6,  31 => 5,  25 => 1,);
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
/*         {% block javascripts %}*/
/*             <script src="{{ asset('public/js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* {# empty Twig template #}*/
