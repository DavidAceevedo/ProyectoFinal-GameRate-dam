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

/* videojuego/edit.html.twig */
class __TwigTemplate_153366ab32f3a8c69e5a2809c25e6110 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videojuego/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videojuego/edit.html.twig"));

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

        yield "Editar ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["videojuego"]) || array_key_exists("videojuego", $context) ? $context["videojuego"] : (function () { throw new RuntimeError('Variable "videojuego" does not exist.', 3, $this->source); })()), "titulo", [], "any", false, false, false, 3), "html", null, true);
        
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
                <div class=\"card-header bg-warning text-dark py-3\">
                    <h2 class=\"h5 mb-0\">✏️ Editar: ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["videojuego"]) || array_key_exists("videojuego", $context) ? $context["videojuego"] : (function () { throw new RuntimeError('Variable "videojuego" does not exist.', 10, $this->source); })()), "titulo", [], "any", false, false, false, 10), "html", null, true);
        yield "</h2>
                </div>
                <div class=\"card-body p-4\">
                    ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        yield "

                    <div class=\"mb-3\">
                        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "titulo", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Título"]);
        yield "
                        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "titulo", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
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
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "descripcion", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Descripción"]);
        yield "
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "descripcion", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "rows" => 5]]);
        yield "
                    </div>

                    ";
        // line 32
        yield "                    <div class=\"mb-4\">
                        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "plataformas", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Plataformas Disponibles"]);
        yield "
                        <div class=\"p-3 border rounded bg-light\">
                            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "plataformas", [], "any", false, false, false, 35), 'widget');
        yield "
                        </div>
                    </div>

                    <hr>

                    <div class=\"d-flex justify-content-between\">
                        <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_index");
        yield "\" class=\"btn btn-outline-secondary\">Volver</a>
                        <button type=\"submit\" class=\"btn btn-warning px-4\">Actualizar Cambios</button>
                    </div>
                    ";
        // line 45
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
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
        return "videojuego/edit.html.twig";
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
        return array (  177 => 45,  171 => 42,  161 => 35,  156 => 33,  153 => 32,  147 => 28,  143 => 27,  136 => 23,  132 => 22,  129 => 21,  123 => 17,  119 => 16,  113 => 13,  107 => 10,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Editar {{ videojuego.titulo }}{% endblock %}

{% block body %}
    <div class=\"row justify-content-center mt-4\">
        <div class=\"col-md-8\">
            <div class=\"card shadow border-0\">
                <div class=\"card-header bg-warning text-dark py-3\">
                    <h2 class=\"h5 mb-0\">✏️ Editar: {{ videojuego.titulo }}</h2>
                </div>
                <div class=\"card-body p-4\">
                    {{ form_start(form) }}

                    <div class=\"mb-3\">
                        {{ form_label(form.titulo, 'Título', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.titulo, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    {# CAMBIO: Ahora usamos categoria en lugar de genero #}
                    <div class=\"mb-3\">
                        {{ form_label(form.categoria, 'Categoría', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.categoria, {'attr': {'class': 'form-select'}}) }}
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(form.descripcion, 'Descripción', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.descripcion, {'attr': {'class': 'form-control', 'rows': 5}}) }}
                    </div>

                    {# NUEVO: Sección de Plataformas #}
                    <div class=\"mb-4\">
                        {{ form_label(form.plataformas, 'Plataformas Disponibles', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        <div class=\"p-3 border rounded bg-light\">
                            {{ form_widget(form.plataformas) }}
                        </div>
                    </div>

                    <hr>

                    <div class=\"d-flex justify-content-between\">
                        <a href=\"{{ path('videojuego_index') }}\" class=\"btn btn-outline-secondary\">Volver</a>
                        <button type=\"submit\" class=\"btn btn-warning px-4\">Actualizar Cambios</button>
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "videojuego/edit.html.twig", "/home/davidam/PhpstormProjects/ProyectoFinal-GameRate-dam/templates/videojuego/edit.html.twig");
    }
}
