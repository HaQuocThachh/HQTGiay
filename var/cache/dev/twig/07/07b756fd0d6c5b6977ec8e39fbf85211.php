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

/* product/index.html.twig */
class __TwigTemplate_e4c72aa31ba3305bb2b86c59eb584c02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <style>
        h2.a {
            text-align: center;
            background: #ff5e00;
            color: #96ff52;
        }
    </style>
    <body>
<div id=\"mainer\" class=\"mainer\">
    <div class=\"container-fluid container-max-width-xl\">
    <div class=\"mt-4 flex\">
    <h2 class=\"a\"><b>TT Shoes Shop</b></h2>
    <h3><b>Choose Type</b></h3>

    <ul class=\"nav nav-tabs\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 20
            echo "            <div class=\"nav-item\">
                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productByGenre", ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" class=\"nav-link active\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "GenreName", [], "any", false, false, false, 21), "html", null, true);
            echo "</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ul>
    <div class=\"bs-example\" data-example-id=\"striped-table\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Date</th>
                <th>Image</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 40
            echo "                <tr>
                    <th scope=\"row\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "</th>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "ProductName", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date", [], "any", false, false, false, 45), "F j,Y, g:i a"), "html", null, true);
            echo "</td>
                    <div class=\"item-picture\">
                        <td><img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/productImages/" . twig_get_attribute($this->env, $this->source, $context["product"], "Image", [], "any", false, false, false, 47))), "html", null, true);
            echo "\" height=\"200px\" width=\"300px\"></td>
                    <td>
                        ";
            // line 50
            echo "                        ";
            // line 51
            echo "                        ";
            // line 52
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_details", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" class='btn btn-success'>View</a>
                        <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class='btn btn-default'>Edit</a>
                        <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo " \"class='btn btn-danger'>Delete</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 58,  188 => 54,  184 => 53,  179 => 52,  177 => 51,  175 => 50,  170 => 47,  165 => 45,  161 => 44,  157 => 43,  153 => 42,  149 => 41,  146 => 40,  142 => 39,  125 => 24,  114 => 21,  111 => 20,  107 => 19,  90 => 4,  80 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} {{ parent ()}} {% endblock %}
{% block body %}
    <style>
        h2.a {
            text-align: center;
            background: #ff5e00;
            color: #96ff52;
        }
    </style>
    <body>
<div id=\"mainer\" class=\"mainer\">
    <div class=\"container-fluid container-max-width-xl\">
    <div class=\"mt-4 flex\">
    <h2 class=\"a\"><b>TT Shoes Shop</b></h2>
    <h3><b>Choose Type</b></h3>

    <ul class=\"nav nav-tabs\">
        {% for genre in genres %}
            <div class=\"nav-item\">
                <a href=\"{{ path('productByGenre',{'id':genre.id}) }}\" class=\"nav-link active\">{{ genre.GenreName }}</a>
            </div>
        {% endfor %}
    </ul>
    <div class=\"bs-example\" data-example-id=\"striped-table\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Date</th>
                <th>Image</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            {% for product in products %}
                <tr>
                    <th scope=\"row\">{{ product.id }}</th>
                    <td>{{ product.ProductName }}</td>
                    <td>{{ product.price }}</td>
                    <td>{{ product.description }}</td>
                    <td>{{ product.date|date('F j,Y, g:i a') }}</td>
                    <div class=\"item-picture\">
                        <td><img src=\"{{ asset('upload/productImages/' ~ product.Image) }}\" height=\"200px\" width=\"300px\"></td>
                    <td>
                        {#                        <a href=\"{{ path('todo_details', {'id': product.id}) }} \" class='btn btn-success'>View</a>#}
                        {#                        <a href=\"{{ path('todo_edit', {'id': product.id}) }}\" class='btn btn-default'>Edit</a>#}
                        {#                        <a href=\"{{ path('todo_delete', {'id': product.id}) }}\" class='btn btn-danger'>Delete</a>#}
                        <a href=\"{{ path('product_details', {'id': product.id}) }}\" class='btn btn-success'>View</a>
                        <a href=\"{{ path('product_edit', {'id': product.id}) }}\" class='btn btn-default'>Edit</a>
                        <a href=\"{{ path('product_delete', {'id': product.id}) }} \"class='btn btn-danger'>Delete</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}", "product/index.html.twig", "C:\\Users\\ADMIN\\HQTGiay\\templates\\product\\index.html.twig");
    }
}
