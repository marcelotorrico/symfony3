<?php

/* MTDLoginBundle:Registro:formularioLogin.html.twig */
class __TwigTemplate_7fd63e60ac8cead46659754a7aeabff7320a3f4ab50793faf3ead4136d469fde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MTDLoginBundle:Registro:formularioLogin.html.twig", 1);
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
        $__internal_2ae98d020311c39ea1d868bcbde5636638f57c9eaf705b50f235e2339a80dc80 = $this->env->getExtension("native_profiler");
        $__internal_2ae98d020311c39ea1d868bcbde5636638f57c9eaf705b50f235e2339a80dc80->enter($__internal_2ae98d020311c39ea1d868bcbde5636638f57c9eaf705b50f235e2339a80dc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDLoginBundle:Registro:formularioLogin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ae98d020311c39ea1d868bcbde5636638f57c9eaf705b50f235e2339a80dc80->leave($__internal_2ae98d020311c39ea1d868bcbde5636638f57c9eaf705b50f235e2339a80dc80_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb865191d64692977c1d6b9e14883ce9c7cea2ead73b57065ceba5045c056ebd = $this->env->getExtension("native_profiler");
        $__internal_eb865191d64692977c1d6b9e14883ce9c7cea2ead73b57065ceba5045c056ebd->enter($__internal_eb865191d64692977c1d6b9e14883ce9c7cea2ead73b57065ceba5045c056ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <script>alert('";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "');</script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    
    <section class=\"jumbotron\">
        <div class=\"container\">
            <h2>Inicio Sesion</h2>
        </div>
    </section>

    <div class=\"container\">
        
        <div class=\"col-md-12\">
            <br>
            <div class=\"formulario\">
                <form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\" role=\"form\" data-async data-target=\"#rating-modal\" class=\"text-left\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class =\"form-group\">
                                <div class=\"input-group\">
                                    <label class=\"input-group-addon addonGroup required\" for=\"fecha\">Nombre:</label>
                                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"
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
                                    <input type=\"password\" id=\"password\" name=\"_password\" maxlength=\"50\" placeholder=\"Ingrese Contrasena\"
                                           class=\"form-control inputGroup\" title=\"Contrasena\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class =\"form-group\">
                        <button type=\"submit\" id =\"enviar\" name=\"enviar\" class=\"btn btn-primary\"> Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_eb865191d64692977c1d6b9e14883ce9c7cea2ead73b57065ceba5045c056ebd->leave($__internal_eb865191d64692977c1d6b9e14883ce9c7cea2ead73b57065ceba5045c056ebd_prof);

    }

    public function getTemplateName()
    {
        return "MTDLoginBundle:Registro:formularioLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  83 => 24,  69 => 12,  60 => 10,  56 => 9,  53 => 8,  47 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <script>alert('{{ flashMessage }}');</script>*/
/*     {% endfor %}*/
/*     */
/*     <section class="jumbotron">*/
/*         <div class="container">*/
/*             <h2>Inicio Sesion</h2>*/
/*         </div>*/
/*     </section>*/
/* */
/*     <div class="container">*/
/*         */
/*         <div class="col-md-12">*/
/*             <br>*/
/*             <div class="formulario">*/
/*                 <form action="{{ path('login') }}" method="post" role="form" data-async data-target="#rating-modal" class="text-left">*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <div class ="form-group">*/
/*                                 <div class="input-group">*/
/*                                     <label class="input-group-addon addonGroup required" for="fecha">Nombre:</label>*/
/*                                     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required"*/
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
/*                                     <input type="password" id="password" name="_password" maxlength="50" placeholder="Ingrese Contrasena"*/
/*                                            class="form-control inputGroup" title="Contrasena">*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class ="form-group">*/
/*                         <button type="submit" id ="enviar" name="enviar" class="btn btn-primary"> Ingresar</button>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
