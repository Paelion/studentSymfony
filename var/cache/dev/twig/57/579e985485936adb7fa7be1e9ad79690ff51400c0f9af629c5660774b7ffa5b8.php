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

/* note/index.html.twig */
class __TwigTemplate_4e625839c7373291a2e83b8f763f8f120c64f0144030d2cc5e7fa31fe0a0798c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "note/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "note/index.html.twig", 1);
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
            <h2>Notes</h2><br>
            ";
        // line 13
        echo "            <div>
                <p style=\"font-size: 22px;\">Ajouter une note :</p>
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new RuntimeError('Variable "formNote" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new RuntimeError('Variable "formNote" does not exist.', 16, $this->source); })()), 'rest');
        echo "
                <select name=\"matiereId\">
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) || array_key_exists("matieres", $context) ? $context["matieres"] : (function () { throw new RuntimeError('Variable "matieres" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 19
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matiere"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matiere"], "nom", [], "any", false, false, false, 19)), "html", null, true);
            echo " -- Coeff : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matiere"], "coef", [], "any", false, false, false, 19), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                </select><br><br>
                <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new RuntimeError('Variable "formNote" does not exist.', 23, $this->source); })()), 'form_end');
        echo "
            </div>
            <br>
            ";
        // line 26
        if (twig_test_empty((isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 26, $this->source); })()))) {
            // line 27
            echo "                <p>Il n'y a pas de note renseignée, voulez-vous accéder à l'espace matières ?</p>
                <button class=\"btn btn-warning\"><a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("matieres");
            echo "\">Voir les matières</a></button>
            ";
        } else {
            // line 30
            echo "                <ul>
                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                // line 32
                echo "                        <li ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 32), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "resultat", [], "any", false, false, false, 32), "html", null, true);
                echo "</li ><br>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
                </ul>
            ";
        }
        // line 37
        echo "        </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "note/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 37,  134 => 34,  123 => 32,  119 => 31,  116 => 30,  111 => 28,  108 => 27,  106 => 26,  100 => 23,  96 => 21,  83 => 19,  79 => 18,  74 => 16,  70 => 15,  66 => 13,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-6\">
            <h2>Notes</h2><br>
            {# <a href=\"{{ path('series') }}\">
                 <button class=\"btn btn-warning\">Page Series</button>
             </a>
         </div>#}
            <div>
                <p style=\"font-size: 22px;\">Ajouter une note :</p>
                {{ form_start(formNote) }}
                {{ form_rest(formNote) }}
                <select name=\"matiereId\">
                    {% for matiere in matieres %}
                        <option value=\"{{ matiere.id }}\">{{ matiere.nom |capitalize }} -- Coeff : {{ matiere.coef }}</option>
                    {% endfor %}
                </select><br><br>
                <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                {{ form_end(formNote) }}
            </div>
            <br>
            {% if notes is empty %}
                <p>Il n'y a pas de note renseignée, voulez-vous accéder à l'espace matières ?</p>
                <button class=\"btn btn-warning\"><a href=\"{{ path('matieres')}}\">Voir les matières</a></button>
            {% else %}
                <ul>
                    {% for note in notes %}
                        <li {{ note.id }}>{{ note.resultat }}</li ><br>
                    {% endfor %}

                </ul>
            {% endif %}
        </div>
    </div>
    {% endblock %}
", "note/index.html.twig", "/Users/pa/student/templates/note/index.html.twig");
    }
}
