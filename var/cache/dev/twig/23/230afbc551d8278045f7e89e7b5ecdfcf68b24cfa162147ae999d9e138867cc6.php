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

/* note/singleMatiere.html.twig */
class __TwigTemplate_d485fbc6f3f8848571faccd2e226ebe47252be359d1733b01d34e53b311b09f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "note/singleMatiere.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "note/singleMatiere.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-6\">
            <h2>Intitulé de la matière : ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), "html", null, true);
        echo "</h2><br>
            <br>
            <ul>
                <div>
                    <br>
                    Coefficient : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 13, $this->source); })()), "coef", [], "any", false, false, false, 13), "html", null, true);
        echo "
                </div>
                <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\"><button class=\"btn btn-danger\">Supprimer cette matière</button></a>
            </ul>
            <br>
            <br>
            <h3>Modifier la matière :</h3><br>
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUpdate"]) || array_key_exists("formUpdate", $context) ? $context["formUpdate"] : (function () { throw new RuntimeError('Variable "formUpdate" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUpdate"]) || array_key_exists("formUpdate", $context) ? $context["formUpdate"] : (function () { throw new RuntimeError('Variable "formUpdate" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
        </div>

    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "note/singleMatiere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 21,  86 => 20,  78 => 15,  73 => 13,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-6\">
            <h2>Intitulé de la matière : {{ matiere.nom }}</h2><br>
            <br>
            <ul>
                <div>
                    <br>
                    Coefficient : {{ matiere.coef }}
                </div>
                <a href=\"{{path(\"remove\", {id: matiere.id})}}\"><button class=\"btn btn-danger\">Supprimer cette matière</button></a>
            </ul>
            <br>
            <br>
            <h3>Modifier la matière :</h3><br>
            {{ form_start(formUpdate) }}
            {{ form_end(formUpdate) }}
        </div>

    </div>
    {% endblock %}
", "note/singleMatiere.html.twig", "/Users/pa/student/templates/note/singleMatiere.html.twig");
    }
}
