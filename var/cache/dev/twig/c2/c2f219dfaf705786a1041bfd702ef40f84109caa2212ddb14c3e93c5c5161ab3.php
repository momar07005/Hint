<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_c333bae1b1a34d7ff8ac18ee5e86cf0621d23cadcbf52a4a8ab7c81adee25f78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e9f0ad26e1eb5deaac49f637a765e446204328c6479f1994aa1277b8d6ccab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9f0ad26e1eb5deaac49f637a765e446204328c6479f1994aa1277b8d6ccab3->enter($__internal_6e9f0ad26e1eb5deaac49f637a765e446204328c6479f1994aa1277b8d6ccab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_53a07d7eb0e679ef55a1d547a69b6b2df0a7c33f3a31b0e475c9476318c3c9a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a07d7eb0e679ef55a1d547a69b6b2df0a7c33f3a31b0e475c9476318c3c9a2->enter($__internal_53a07d7eb0e679ef55a1d547a69b6b2df0a7c33f3a31b0e475c9476318c3c9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e9f0ad26e1eb5deaac49f637a765e446204328c6479f1994aa1277b8d6ccab3->leave($__internal_6e9f0ad26e1eb5deaac49f637a765e446204328c6479f1994aa1277b8d6ccab3_prof);

        
        $__internal_53a07d7eb0e679ef55a1d547a69b6b2df0a7c33f3a31b0e475c9476318c3c9a2->leave($__internal_53a07d7eb0e679ef55a1d547a69b6b2df0a7c33f3a31b0e475c9476318c3c9a2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_47cdffd92ab5f91e4377ce7a399e07c28ecd13ac415c6cc35561a75ff415b550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47cdffd92ab5f91e4377ce7a399e07c28ecd13ac415c6cc35561a75ff415b550->enter($__internal_47cdffd92ab5f91e4377ce7a399e07c28ecd13ac415c6cc35561a75ff415b550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd18253a57a0a4cf86f0656686da964c686ea0bd30f9c88f952db4884ac033a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd18253a57a0a4cf86f0656686da964c686ea0bd30f9c88f952db4884ac033a1->enter($__internal_dd18253a57a0a4cf86f0656686da964c686ea0bd30f9c88f952db4884ac033a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
        <div>
            ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 11
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 13
        echo "        </div>

        ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 17
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 18
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 19
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        // line 24
        echo "
        <div>
            ";
        // line 26
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 28
        echo "        </div>
 
";
        
        $__internal_dd18253a57a0a4cf86f0656686da964c686ea0bd30f9c88f952db4884ac033a1->leave($__internal_dd18253a57a0a4cf86f0656686da964c686ea0bd30f9c88f952db4884ac033a1_prof);

        
        $__internal_47cdffd92ab5f91e4377ce7a399e07c28ecd13ac415c6cc35561a75ff415b550->leave($__internal_47cdffd92ab5f91e4377ce7a399e07c28ecd13ac415c6cc35561a75ff415b550_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09b5f54a9e3c9daf5fc1bd975fbbf75a05e9fc06a43d98e8951b3f46a812b089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09b5f54a9e3c9daf5fc1bd975fbbf75a05e9fc06a43d98e8951b3f46a812b089->enter($__internal_09b5f54a9e3c9daf5fc1bd975fbbf75a05e9fc06a43d98e8951b3f46a812b089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9b058735389306f1c01a30323033d5920418397c1a0b7fae21da0a880ced29d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b058735389306f1c01a30323033d5920418397c1a0b7fae21da0a880ced29d8->enter($__internal_9b058735389306f1c01a30323033d5920418397c1a0b7fae21da0a880ced29d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "            ";
        
        $__internal_9b058735389306f1c01a30323033d5920418397c1a0b7fae21da0a880ced29d8->leave($__internal_9b058735389306f1c01a30323033d5920418397c1a0b7fae21da0a880ced29d8_prof);

        
        $__internal_09b5f54a9e3c9daf5fc1bd975fbbf75a05e9fc06a43d98e8951b3f46a812b089->leave($__internal_09b5f54a9e3c9daf5fc1bd975fbbf75a05e9fc06a43d98e8951b3f46a812b089_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 27,  136 => 26,  124 => 28,  122 => 26,  118 => 24,  115 => 23,  109 => 22,  100 => 19,  95 => 18,  90 => 17,  85 => 16,  83 => 15,  79 => 13,  71 => 11,  65 => 8,  61 => 7,  56 => 6,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/index.html.twig' %}
{% block body %}

        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
 
{% endblock %}", "@FOSUser/layout.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
