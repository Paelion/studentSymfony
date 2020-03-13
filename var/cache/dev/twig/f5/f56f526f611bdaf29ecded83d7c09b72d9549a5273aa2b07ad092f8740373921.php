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

/* note/matieres.html.twig */
class __TwigTemplate_50eaf05b1e8cbe90560d144ed7eb6c60e388a5f4ad91624ea0f4eeb48494a364 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "note/matieres.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "note/matieres.html.twig", 1);
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
            <h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Matière"), "html", null, true);
        echo "</h2><br>
            <div>
                <p style=\"font-size: 22px;\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ajouter une matière"), "html", null, true);
        echo "</p>
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMatiere"]) || array_key_exists("formMatiere", $context) ? $context["formMatiere"] : (function () { throw new RuntimeError('Variable "formMatiere" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMatiere"]) || array_key_exists("formMatiere", $context) ? $context["formMatiere"] : (function () { throw new RuntimeError('Variable "formMatiere" does not exist.', 12, $this->source); })()), 'form_end');
        echo "
            </div>
            <br>
            ";
        // line 15
        if (twig_test_empty((isset($context["matieres"]) || array_key_exists("matieres", $context) ? $context["matieres"] : (function () { throw new RuntimeError('Variable "matieres" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Il n'y a pas de matière"), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 18
            echo "                <ul>
                    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) || array_key_exists("matieres", $context) ? $context["matieres"] : (function () { throw new RuntimeError('Variable "matieres" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
                // line 20
                echo "                        <li ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matiere"], "id", [], "any", false, false, false, 20), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matiere"], "nom", [], "any", false, false, false, 20), "html", null, true);
                echo "<br>Coefficient : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matiere"], "coef", [], "any", false, false, false, 20), "html", null, true);
                echo "<br>
                            <button class=\"btn btn-warning\"><a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singleMatiere", ["id" => twig_get_attribute($this->env, $this->source, $context["matiere"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voir la matière"), "html", null, true);
                echo "</a></button>
                        </li><br>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                </ul>
            ";
        }
        // line 26
        echo "        </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "note/matieres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 26,  119 => 24,  108 => 21,  99 => 20,  95 => 19,  92 => 18,  86 => 16,  84 => 15,  78 => 12,  74 => 11,  70 => 10,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-6\">
            <h2>{{ \"Matière\"| trans }}</h2><br>
            <div>
                <p style=\"font-size: 22px;\">{{ \"Ajouter une matière\"| trans }}</p>
                {{ form_start(formMatiere) }}
                {{ form_end(formMatiere) }}
            </div>
            <br>
            {% if matieres is empty %}
                <p>{{ \"Il n'y a pas de matière\"| trans }}</p>
            {% else %}
                <ul>
                    {% for matiere in matieres %}
                        <li {{ matiere.id }}>{{ matiere.nom }}<br>Coefficient : {{ matiere.coef }}<br>
                            <button class=\"btn btn-warning\"><a href=\"{{ path('singleMatiere', {id: matiere.id}) }}\">{{ \"Voir la matière\"| trans }}</a></button>
                        </li><br>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    </div>
    {% endblock %}
", "note/matieres.html.twig", "/Users/pa/student/templates/note/matieres.html.twig");
    }
}
