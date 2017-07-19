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
            'body' => array($this, 'block_body'),
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bd6f9290508e13309ff6f2e818c83520f99513cf6340f74a99cd3909c820fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd6f9290508e13309ff6f2e818c83520f99513cf6340f74a99cd3909c820fb1->enter($__internal_7bd6f9290508e13309ff6f2e818c83520f99513cf6340f74a99cd3909c820fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        $__internal_6044c2596875067c67e8aae35287f736f0c2fa1f67f09796b8568566bcc2267a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6044c2596875067c67e8aae35287f736f0c2fa1f67f09796b8568566bcc2267a->enter($__internal_6044c2596875067c67e8aae35287f736f0c2fa1f67f09796b8568566bcc2267a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bd6f9290508e13309ff6f2e818c83520f99513cf6340f74a99cd3909c820fb1->leave($__internal_7bd6f9290508e13309ff6f2e818c83520f99513cf6340f74a99cd3909c820fb1_prof);

        
        $__internal_6044c2596875067c67e8aae35287f736f0c2fa1f67f09796b8568566bcc2267a->leave($__internal_6044c2596875067c67e8aae35287f736f0c2fa1f67f09796b8568566bcc2267a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbd39ec45747658b2e620a72101765c19112b306f8984c6f1da652c0e0f70c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd39ec45747658b2e620a72101765c19112b306f8984c6f1da652c0e0f70c55->enter($__internal_dbd39ec45747658b2e620a72101765c19112b306f8984c6f1da652c0e0f70c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a91cf15ff0fa9d65e0e7858ce66a04760a01d61a1c5d925c737ca5c584c953c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91cf15ff0fa9d65e0e7858ce66a04760a01d61a1c5d925c737ca5c584c953c0->enter($__internal_a91cf15ff0fa9d65e0e7858ce66a04760a01d61a1c5d925c737ca5c584c953c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "        <div>
            ";
        // line 4
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 6
        echo "        </div>
";
        
        $__internal_a91cf15ff0fa9d65e0e7858ce66a04760a01d61a1c5d925c737ca5c584c953c0->leave($__internal_a91cf15ff0fa9d65e0e7858ce66a04760a01d61a1c5d925c737ca5c584c953c0_prof);

        
        $__internal_dbd39ec45747658b2e620a72101765c19112b306f8984c6f1da652c0e0f70c55->leave($__internal_dbd39ec45747658b2e620a72101765c19112b306f8984c6f1da652c0e0f70c55_prof);

    }

    // line 4
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_5fbdb278e30b33675288f757cf3ab55db4eb0b461344cd0175a9aefe21349e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fbdb278e30b33675288f757cf3ab55db4eb0b461344cd0175a9aefe21349e48->enter($__internal_5fbdb278e30b33675288f757cf3ab55db4eb0b461344cd0175a9aefe21349e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_6c074d62a3eae876f38dad0b3e74078e7cae2a78d551e2f5702b025dcccee68c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c074d62a3eae876f38dad0b3e74078e7cae2a78d551e2f5702b025dcccee68c->enter($__internal_6c074d62a3eae876f38dad0b3e74078e7cae2a78d551e2f5702b025dcccee68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 5
        echo "            ";
        
        $__internal_6c074d62a3eae876f38dad0b3e74078e7cae2a78d551e2f5702b025dcccee68c->leave($__internal_6c074d62a3eae876f38dad0b3e74078e7cae2a78d551e2f5702b025dcccee68c_prof);

        
        $__internal_5fbdb278e30b33675288f757cf3ab55db4eb0b461344cd0175a9aefe21349e48->leave($__internal_5fbdb278e30b33675288f757cf3ab55db4eb0b461344cd0175a9aefe21349e48_prof);

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
        return array (  75 => 5,  66 => 4,  55 => 6,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
            {% block hwi_oauth_content %}
            {% endblock hwi_oauth_content %}
        </div>
{% endblock %}", "HWIOAuthBundle::layout.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/HWIOAuthBundle/views/layout.html.twig");
    }
}
