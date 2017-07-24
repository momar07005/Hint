<?php

/* HWIOAuthBundle::layout.html.twig */
class __TwigTemplate_72566889ca6acda8c7e69f86e85d239f29278819048d37cdf38d902687da1b13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "HWIOAuthBundle::layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78c0ee5c41680b8e5d216f74ac8c6e1dcecc497dcbe1aca80d95c9e4d5455e01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c0ee5c41680b8e5d216f74ac8c6e1dcecc497dcbe1aca80d95c9e4d5455e01->enter($__internal_78c0ee5c41680b8e5d216f74ac8c6e1dcecc497dcbe1aca80d95c9e4d5455e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        $__internal_bfcb34945879d342aac5ce6c547a8a2eb85f9eb26d1894da40c6735977f88e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfcb34945879d342aac5ce6c547a8a2eb85f9eb26d1894da40c6735977f88e34->enter($__internal_bfcb34945879d342aac5ce6c547a8a2eb85f9eb26d1894da40c6735977f88e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78c0ee5c41680b8e5d216f74ac8c6e1dcecc497dcbe1aca80d95c9e4d5455e01->leave($__internal_78c0ee5c41680b8e5d216f74ac8c6e1dcecc497dcbe1aca80d95c9e4d5455e01_prof);

        
        $__internal_bfcb34945879d342aac5ce6c547a8a2eb85f9eb26d1894da40c6735977f88e34->leave($__internal_bfcb34945879d342aac5ce6c547a8a2eb85f9eb26d1894da40c6735977f88e34_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2749effcca0ff31a73c09305df2e2f4e32ffab786cb9657748cfdcbef306e177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2749effcca0ff31a73c09305df2e2f4e32ffab786cb9657748cfdcbef306e177->enter($__internal_2749effcca0ff31a73c09305df2e2f4e32ffab786cb9657748cfdcbef306e177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1f44e4bf36c89a997f8dcbca9c1b58978deadfe844513fcd740ab9105c3bacf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f44e4bf36c89a997f8dcbca9c1b58978deadfe844513fcd740ab9105c3bacf9->enter($__internal_1f44e4bf36c89a997f8dcbca9c1b58978deadfe844513fcd740ab9105c3bacf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "        <div>
            ";
        // line 5
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 7
        echo "        </div>
";
        
        $__internal_1f44e4bf36c89a997f8dcbca9c1b58978deadfe844513fcd740ab9105c3bacf9->leave($__internal_1f44e4bf36c89a997f8dcbca9c1b58978deadfe844513fcd740ab9105c3bacf9_prof);

        
        $__internal_2749effcca0ff31a73c09305df2e2f4e32ffab786cb9657748cfdcbef306e177->leave($__internal_2749effcca0ff31a73c09305df2e2f4e32ffab786cb9657748cfdcbef306e177_prof);

    }

    // line 5
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_b1134e41d29f75c8a54f909d86200ad13615b66f4ffeac80f332c61f5d642729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1134e41d29f75c8a54f909d86200ad13615b66f4ffeac80f332c61f5d642729->enter($__internal_b1134e41d29f75c8a54f909d86200ad13615b66f4ffeac80f332c61f5d642729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_9a59ff80bfc6dc25c34a4975e07deac376e1aecc7c288b0be7c400fb56e8694f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a59ff80bfc6dc25c34a4975e07deac376e1aecc7c288b0be7c400fb56e8694f->enter($__internal_9a59ff80bfc6dc25c34a4975e07deac376e1aecc7c288b0be7c400fb56e8694f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 6
        echo "            ";
        
        $__internal_9a59ff80bfc6dc25c34a4975e07deac376e1aecc7c288b0be7c400fb56e8694f->leave($__internal_9a59ff80bfc6dc25c34a4975e07deac376e1aecc7c288b0be7c400fb56e8694f_prof);

        
        $__internal_b1134e41d29f75c8a54f909d86200ad13615b66f4ffeac80f332c61f5d642729->leave($__internal_b1134e41d29f75c8a54f909d86200ad13615b66f4ffeac80f332c61f5d642729_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 6,  66 => 5,  55 => 7,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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

{% block content %}
        <div>
            {% block hwi_oauth_content %}
            {% endblock hwi_oauth_content %}
        </div>
{% endblock %}", "HWIOAuthBundle::layout.html.twig", "C:\\Hint\\app/Resources/HWIOAuthBundle/views/layout.html.twig");
    }
}
