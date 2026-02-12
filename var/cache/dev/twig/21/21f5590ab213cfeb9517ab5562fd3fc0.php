<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* videojuego/wishlist.html.twig */
class __TwigTemplate_5eebdecf8d9163d6658997c3eba35ec2 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videojuego/wishlist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videojuego/wishlist.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Mi Lista de Deseos";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">❤️ Mi Lista de Deseos</h1>

        ";
        // line 9
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["deseos"]) || array_key_exists("deseos", $context) ? $context["deseos"] : (function () { throw new RuntimeError('Variable "deseos" does not exist.', 9, $this->source); })()))) {
            // line 10
            yield "            <div class=\"alert alert-info\">
                Aún no tienes juegos en tu lista. ¡Explora el <a href=\"";
            // line 11
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_index");
            yield "\">catálogo</a>!
            </div>
        ";
        } else {
            // line 14
            yield "            <div class=\"row\">
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["deseos"]) || array_key_exists("deseos", $context) ? $context["deseos"] : (function () { throw new RuntimeError('Variable "deseos" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["deseo"]) {
                // line 16
                yield "                    <div class=\"col-md-6 mb-3\">
                        <div class=\"card shadow-sm border-0\">
                            <div class=\"card-body d-flex justify-content-between align-items-center\">
                                <div>
                                    <h5 class=\"mb-0\">";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["deseo"], "videojuego", [], "any", false, false, false, 20), "titulo", [], "any", false, false, false, 20), "html", null, true);
                yield "</h5>
                                    <small class=\"text-muted\">Añadido el: ";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["deseo"], "fechaAgregado", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
                yield "</small>
                                </div>
                                <a href=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["deseo"], "videojuego", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-primary\">Ver Juego</a>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['deseo'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "            </div>
        ";
        }
        // line 30
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "videojuego/wishlist.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  153 => 30,  149 => 28,  138 => 23,  133 => 21,  129 => 20,  123 => 16,  119 => 15,  116 => 14,  110 => 11,  107 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mi Lista de Deseos{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">❤️ Mi Lista de Deseos</h1>

        {% if deseos is empty %}
            <div class=\"alert alert-info\">
                Aún no tienes juegos en tu lista. ¡Explora el <a href=\"{{ path('videojuego_index') }}\">catálogo</a>!
            </div>
        {% else %}
            <div class=\"row\">
                {% for deseo in deseos %}
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"card shadow-sm border-0\">
                            <div class=\"card-body d-flex justify-content-between align-items-center\">
                                <div>
                                    <h5 class=\"mb-0\">{{ deseo.videojuego.titulo }}</h5>
                                    <small class=\"text-muted\">Añadido el: {{ deseo.fechaAgregado|date('d/m/Y') }}</small>
                                </div>
                                <a href=\"{{ path('videojuego_show', {'id': deseo.videojuego.id}) }}\" class=\"btn btn-sm btn-primary\">Ver Juego</a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% endif %}
    </div>
{% endblock %}
", "videojuego/wishlist.html.twig", "/home/davidam/PhpstormProjects/ProyectoFinal-GameRate-dam/templates/videojuego/wishlist.html.twig");
    }
}
