<?php

/* MTDLoginBundle:Registro:formularioRegistro.html.twig */
class __TwigTemplate_c989042e585b3884597b32724a9020ae9afe72c6e0d4ccbd4f515e8ee8f97584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MTDLoginBundle:Registro:formularioRegistro.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8d7d3f15f7f3e68ee6384f4d196f59382902cf61ca9b311b5d45f065374b550 = $this->env->getExtension("native_profiler");
        $__internal_b8d7d3f15f7f3e68ee6384f4d196f59382902cf61ca9b311b5d45f065374b550->enter($__internal_b8d7d3f15f7f3e68ee6384f4d196f59382902cf61ca9b311b5d45f065374b550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDLoginBundle:Registro:formularioRegistro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8d7d3f15f7f3e68ee6384f4d196f59382902cf61ca9b311b5d45f065374b550->leave($__internal_b8d7d3f15f7f3e68ee6384f4d196f59382902cf61ca9b311b5d45f065374b550_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6a0f2f26eadea087afbaa900c3391667094585142b8294f29f3bd94c68fa9f6 = $this->env->getExtension("native_profiler");
        $__internal_e6a0f2f26eadea087afbaa900c3391667094585142b8294f29f3bd94c68fa9f6->enter($__internal_e6a0f2f26eadea087afbaa900c3391667094585142b8294f29f3bd94c68fa9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 6
            echo "        <script>alert('";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "');</script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    
    <section class=\"jumbotron\">
        <div class=\"container\">
            <h2>Registrar Usuario</h2>
        </div>
    </section>

    <div class=\"container\">
        
        <div class=\"col-md-12\">
            <br>
            <div class=\"formulario\">
                <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("mtd_registro_usuario");
        echo "\" method=\"post\" role=\"form\" data-async data-target=\"#rating-modal\" class=\"text-left\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class =\"form-group\">
                                <div class=\"input-group\">
                                    <label class=\"input-group-addon addonGroup required\" for=\"fecha\">Nombre:</label>
                                    <input type=\"text\" id=\"name\" name=\"name\" required=\"required\"
                                                 placeholder=\"Ingrese el nombre\" 
                                                class=\"form-control input-inline inputGroup\" title=\"Nombre de usuario\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class =\"form-group\">
                                <div class=\"input-group\">
                                    <label for=\"password\" class=\"input-group-addon addonGroup required\">Password:</label>
                                    <input type=\"password\" id=\"password\" name=\"password\" maxlength=\"50\" placeholder=\"Ingrese Contrasena\"
                                           class=\"form-control inputGroup\" title=\"Contrasena\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class =\"form-group\">
                        <button type=\"submit\" id =\"enviar\" name=\"enviar\" class=\"btn btn-primary\"> Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_e6a0f2f26eadea087afbaa900c3391667094585142b8294f29f3bd94c68fa9f6->leave($__internal_e6a0f2f26eadea087afbaa900c3391667094585142b8294f29f3bd94c68fa9f6_prof);

    }

    public function getTemplateName()
    {
        return "MTDLoginBundle:Registro:formularioRegistro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  58 => 8,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <script>alert('{{ flashMessage }}');</script>*/
/*     {% endfor %}*/
/*     */
/*     <section class="jumbotron">*/
/*         <div class="container">*/
/*             <h2>Registrar Usuario</h2>*/
/*         </div>*/
/*     </section>*/
/* */
/*     <div class="container">*/
/*         */
/*         <div class="col-md-12">*/
/*             <br>*/
/*             <div class="formulario">*/
/*                 <form action="{{ path('mtd_registro_usuario') }}" method="post" role="form" data-async data-target="#rating-modal" class="text-left">*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <div class ="form-group">*/
/*                                 <div class="input-group">*/
/*                                     <label class="input-group-addon addonGroup required" for="fecha">Nombre:</label>*/
/*                                     <input type="text" id="name" name="name" required="required"*/
/*                                                  placeholder="Ingrese el nombre" */
/*                                                 class="form-control input-inline inputGroup" title="Nombre de usuario">*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <div class ="form-group">*/
/*                                 <div class="input-group">*/
/*                                     <label for="password" class="input-group-addon addonGroup required">Password:</label>*/
/*                                     <input type="password" id="password" name="password" maxlength="50" placeholder="Ingrese Contrasena"*/
/*                                            class="form-control inputGroup" title="Contrasena">*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class ="form-group">*/
/*                         <button type="submit" id ="enviar" name="enviar" class="btn btn-primary"> Registrar</button>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
