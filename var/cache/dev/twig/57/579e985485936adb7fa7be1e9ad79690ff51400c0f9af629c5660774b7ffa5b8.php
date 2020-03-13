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
            <h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Notes"), "html", null, true);
        echo "</h2>
            <br>

            <div>
                <p style=\"font-size: 22px;\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ajouter une note"), "html", null, true);
        echo "</p>
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new RuntimeError('Variable "formNote" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new RuntimeError('Variable "formNote" does not exist.', 14, $this->source); })()), 'rest');
        echo "
                <select name=\"matiereId\">
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) || array_key_exists("matieres", $context) ? $context["matieres"] : (function () { throw new RuntimeError('Variable "matieres" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 17
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matiere"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matiere"], "nom", [], "any", false, false, false, 17)), "html", null, true);
            echo " -- Coeff
                            : ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matiere"], "coef", [], "any", false, false, false, 18), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                </select><br><br>
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Envoyer"), "html", null, true);
        echo "</button>
                ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new RuntimeError('Variable "formNote" does not exist.', 22, $this->source); })()), 'form_end');
        echo "
            </div>
            <br>
            ";
        // line 25
        if (twig_test_empty((isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 25, $this->source); })()))) {
            // line 26
            echo "                <p>Il n'y a pas de note renseignée, voulez-vous accéder à l'espace matières ?</p>
                <button class=\"btn btn-warning\"><a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("matieres");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voir les matières"), "html", null, true);
            echo "</a></button>
            ";
        } else {
            // line 29
            echo "                <ul>
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                // line 31
                echo "                        <li ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "resultat", [], "any", false, false, false, 31), "html", null, true);
                echo "

                            ";
                // line 33
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["note"], "matiereId", [], "any", false, false, false, 33))) {
                    // line 34
                    echo "                                <p>Matière: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["note"], "matiereId", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
                    echo " coef ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["note"], "matiereId", [], "any", false, false, false, 34), "coef", [], "any", false, false, false, 34), "html", null, true);
                    echo "</p>
                            ";
                }
                // line 36
                echo "                        </li><br>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "

                </ul>

            ";
        }
        // line 43
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
        return array (  168 => 43,  161 => 38,  154 => 36,  146 => 34,  144 => 33,  136 => 31,  132 => 30,  129 => 29,  122 => 27,  119 => 26,  117 => 25,  111 => 22,  107 => 21,  104 => 20,  96 => 18,  89 => 17,  85 => 16,  80 => 14,  76 => 13,  72 => 12,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-6\">
            <h2>{{ \"Notes\" | trans }}</h2>
            <br>

            <div>
                <p style=\"font-size: 22px;\">{{ \"Ajouter une note\"| trans }}</p>
                {{ form_start(formNote) }}
                {{ form_rest(formNote) }}
                <select name=\"matiereId\">
                    {% for matiere in matieres %}
                        <option value=\"{{ matiere.id }}\">{{ matiere.nom |capitalize }} -- Coeff
                            : {{ matiere.coef }}</option>
                    {% endfor %}
                </select><br><br>
                <button type=\"submit\" class=\"btn btn-primary\">{{ \"Envoyer\"| trans }}</button>
                {{ form_end(formNote) }}
            </div>
            <br>
            {% if notes is empty %}
                <p>Il n'y a pas de note renseignée, voulez-vous accéder à l'espace matières ?</p>
                <button class=\"btn btn-warning\"><a href=\"{{ path('matieres') }}\">{{ \"Voir les matières\"| trans }}</a></button>
            {% else %}
                <ul>
                    {% for note in notes %}
                        <li {{ note.id }}>{{ note.resultat }}

                            {% if note.matiereId is not null %}
                                <p>Matière: {{ note.matiereId.nom }} coef {{ note.matiereId.coef }}</p>
                            {% endif %}
                        </li><br>
                    {% endfor %}


                </ul>

            {% endif %}
        </div>
    </div>
    {% endblock %}
", "note/index.html.twig", "/Users/pa/student/templates/note/index.html.twig");
    }
}
