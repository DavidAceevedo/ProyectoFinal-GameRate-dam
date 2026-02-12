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

/* videojuego/new.html.twig */
class __TwigTemplate_1bfc4cf7b5668b5a650d77f8503d6509 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videojuego/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videojuego/new.html.twig"));

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

        yield "Añadir Nuevo Videojuego";
        
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
        yield "    <div class=\"row justify-content-center mt-4\">
        <div class=\"col-md-8\">
            <div class=\"card shadow border-0\">
                <div class=\"card-header bg-primary text-white py-3\">
                    <h2 class=\"h5 mb-0\">🎮 Registrar Nuevo Videojuego</h2>
                </div>
                <div class=\"card-body p-4\">
                    ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        yield "

                    <div class=\"mb-3\">
                        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "titulo", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Título del Juego"]);
        yield "
                        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "titulo", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ej: Elden Ring"]]);
        yield "
                    </div>

                    ";
        // line 21
        yield "                    <div class=\"mb-3\">
                        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "categoria", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Categoría"]);
        yield "
                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "categoria", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        <small class=\"text-muted\">Selecciona el género principal del juego.</small>
                    </div>

                    <div class=\"mb-4\">
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "descripcion", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Descripción"]);
        yield "
                        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "descripcion", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "rows" => 5, "placeholder" => "Escribe una breve reseña del juego..."]]);
        yield "
                    </div>

                    ";
        // line 33
        yield "                    <div class=\"mb-4\">
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "plataformas", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Disponible en:"]);
        yield "
                        <div class=\"p-3 border rounded bg-light\">
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "plataformas", [], "any", false, false, false, 36), 'widget');
        yield "
                        </div>
                        <small class=\"text-muted\">Puedes marcar varias opciones.</small>
                    </div>

                    <hr>

                    ";
        // line 44
        yield "                    <div class=\"d-flex justify-content-between\">
                        <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            Cancelar y Volver
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary px-4\">
                            Guardar Videojuego
                        </button>
                    </div>
                    ";
        // line 52
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
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
        return "videojuego/new.html.twig";
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
        return array (  181 => 52,  171 => 45,  168 => 44,  158 => 36,  153 => 34,  150 => 33,  144 => 29,  140 => 28,  132 => 23,  128 => 22,  125 => 21,  119 => 17,  115 => 16,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Añadir Nuevo Videojuego{% endblock %}

{% block body %}
    <div class=\"row justify-content-center mt-4\">
        <div class=\"col-md-8\">
            <div class=\"card shadow border-0\">
                <div class=\"card-header bg-primary text-white py-3\">
                    <h2 class=\"h5 mb-0\">🎮 Registrar Nuevo Videojuego</h2>
                </div>
                <div class=\"card-body p-4\">
                    {{ form_start(form) }}

                    <div class=\"mb-3\">
                        {{ form_label(form.titulo, 'Título del Juego', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.titulo, {'attr': {'class': 'form-control', 'placeholder': 'Ej: Elden Ring'}}) }}
                    </div>

                    {# CAMBIO: Género (texto) por Categoría (relación) #}
                    <div class=\"mb-3\">
                        {{ form_label(form.categoria, 'Categoría', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.categoria, {'attr': {'class': 'form-select'}}) }}
                        <small class=\"text-muted\">Selecciona el género principal del juego.</small>
                    </div>

                    <div class=\"mb-4\">
                        {{ form_label(form.descripcion, 'Descripción', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.descripcion, {'attr': {'class': 'form-control', 'rows': 5, 'placeholder': 'Escribe una breve reseña del juego...'}}) }}
                    </div>

                    {# NUEVO: Sección para seleccionar múltiples plataformas #}
                    <div class=\"mb-4\">
                        {{ form_label(form.plataformas, 'Disponible en:', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        <div class=\"p-3 border rounded bg-light\">
                            {{ form_widget(form.plataformas) }}
                        </div>
                        <small class=\"text-muted\">Puedes marcar varias opciones.</small>
                    </div>

                    <hr>

                    {# BOTONES AL FINAL #}
                    <div class=\"d-flex justify-content-between\">
                        <a href=\"{{ path('videojuego_index') }}\" class=\"btn btn-outline-secondary\">
                            Cancelar y Volver
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary px-4\">
                            Guardar Videojuego
                        </button>
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "videojuego/new.html.twig", "/home/davidam/PhpstormProjects/ProyectoFinal-GameRate-dam/templates/videojuego/new.html.twig");
    }
}
