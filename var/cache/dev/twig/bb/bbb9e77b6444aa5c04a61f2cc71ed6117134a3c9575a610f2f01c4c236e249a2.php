<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /front/security/registration.html.twig */
class __TwigTemplate_4da45d01d8c0b273a354d68a90192f6cb9525abfcf233e3e91403ab6d6b0c3c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/front/security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/front/security/registration.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "/front/security/registration.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    


    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
    <section class=\"register-area ptb-100\">
        <div class=\"container\">
            <div class=\"register-form\">
                <h2>Inscription</h2>
                <div class=\"form-group\">
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 18, $this->source); })()), "Nom", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 22, $this->source); })()), "Prenom", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                </div>
                <div class=\"form-group\">
                    <div class=\"custom-error\">
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 27, $this->source); })()), "Username", [], "any", false, false, false, 27), 'errors');
        echo "
                    </div>
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 29, $this->source); })()), "Username", [], "any", false, false, false, 29), 'label', ["attr" => ["class" => "form-label"], "label" => "Username"]);
        echo "
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 30, $this->source); })()), "Username", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <div class=\"custom-error\">
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 34, $this->source); })()), "Email", [], "any", false, false, false, 34), 'errors');
        echo "
                    </div>
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 36, $this->source); })()), "Email", [], "any", false, false, false, 36), 'label', ["attr" => ["class" => "form-label"], "label" => "Adresse Email"]);
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 37, $this->source); })()), "Email", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                </div>
                <div class=\"form-group\">
                    <div class=\"custom-error\">
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 42, $this->source); })()), "Password", [], "any", false, false, false, 42), 'errors');
        echo "
                </div>
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 44, $this->source); })()), "Password", [], "any", false, false, false, 44), 'label', ["attr" => ["class" => "form-label"], "label" => "Mot de passe"]);
        echo "
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 45, $this->source); })()), "Password", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
  
                <div class=\"form-group\">
                  ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 49, $this->source); })()), "roles", [], "any", false, false, false, 49), 'row', ["attr" => ["class" => "form-control form-control"]]);
        echo "
                </div>

                <div class=\"form-group\">
                    <div class=\"custom-error\">
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 54, $this->source); })()), "Confirm_password", [], "any", false, false, false, 54), 'errors');
        echo "
                    </div>
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 56, $this->source); })()), "Confirm_password", [], "any", false, false, false, 56), 'label', ["attr" => ["class" => "form-label"], "label" => "Confirmer mot de passe"]);
        echo "
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 57, $this->source); })()), "Confirm_password", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 60, $this->source); })()), "file", [], "any", false, false, false, 60), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <div class=\"form-group\">
                    <div class=\"custom-error\">
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 65, $this->source); })()), "captcha", [], "any", false, false, false, 65), 'errors');
        echo "
                    </div>
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 67, $this->source); })()), "captcha", [], "any", false, false, false, 67), 'label', ["attr" => ["class" => "form-label"], "label" => "Captcha"]);
        echo "
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 68, $this->source); })()), "captcha", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"default-btn\">Inscription </button>
                    </div>
                 <div class=\"form-group\">
                                <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"login\">login</a>
                            </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 80, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/front/security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 80,  215 => 74,  206 => 68,  202 => 67,  197 => 65,  189 => 60,  183 => 57,  179 => 56,  174 => 54,  166 => 49,  159 => 45,  155 => 44,  150 => 42,  142 => 37,  138 => 36,  133 => 34,  126 => 30,  122 => 29,  117 => 27,  109 => 22,  102 => 18,  93 => 12,  88 => 9,  78 => 8,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Inscription{% endblock %}




{% block content %}
    


    {{ form_start(f) }}
    <section class=\"register-area ptb-100\">
        <div class=\"container\">
            <div class=\"register-form\">
                <h2>Inscription</h2>
                <div class=\"form-group\">
                    {{ form_row(f.Nom,{'attr': {'class':'form-control'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_row(f.Prenom,{'attr': {'class':'form-control'}}) }}

                </div>
                <div class=\"form-group\">
                    <div class=\"custom-error\">
                        {{form_errors(f.Username)}}
                    </div>
                    {{ form_label(f.Username,\"Username\",{'attr':{'class':'form-label'}}) }}
                    {{ form_widget(f.Username,{'attr': {'class':'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <div class=\"custom-error\">
                        {{form_errors(f.Email)}}
                    </div>
                    {{ form_label(f.Email,\"Adresse Email\",{'attr':{'class':'form-label'}}) }}
                    {{ form_widget(f.Email,{'attr': {'class':'form-control'}}) }}

                </div>
                <div class=\"form-group\">
                    <div class=\"custom-error\">
                    {{form_errors(f.Password)}}
                </div>
                {{ form_label(f.Password,\"Mot de passe\",{'attr':{'class':'form-label'}}) }}
                {{ form_widget(f.Password,{'attr': {'class':'form-control'}}) }}
                </div>
  
                <div class=\"form-group\">
                  {{ form_row(f.roles, {'attr':{'class':'form-control form-control'} }) }}
                </div>

                <div class=\"form-group\">
                    <div class=\"custom-error\">
                        {{form_errors(f.Confirm_password)}}
                    </div>
                    {{ form_label(f.Confirm_password,\"Confirmer mot de passe\",{'attr':{'class':'form-label'}}) }}
                    {{ form_widget(f.Confirm_password,{'attr': {'class':'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(f.file,{'attr': {'class':'form-control'}}) }}
                </div>

                <div class=\"form-group\">
                    <div class=\"custom-error\">
                        {{form_errors(f.captcha)}}
                    </div>
                    {{ form_label(f.captcha,\"Captcha\",{'attr':{'class':'form-label'}}) }}
                    {{ form_widget(f.captcha,{'attr': {'class':'form-control'}}) }}
                </div>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"default-btn\">Inscription </button>
                    </div>
                 <div class=\"form-group\">
                                <a href=\"{{ path('login') }}\" class=\"login\">login</a>
                            </div>
                </div>
            </div>
        </div>
    </section>
    {{ form_end(f) }}


{% endblock  %}
", "/front/security/registration.html.twig", "C:\\Users\\lahma\\Downloads\\Foodine_PIDEV-Gestion_Utilisateur_Ines\\templates\\front\\security\\registration.html.twig");
    }
}
