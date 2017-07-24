<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_514958e2ebbca0ab400b5f7b13950f2bba7e75dd7219e9db93da65747ce20ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8fc138a0e21f52460c4be0f2a842092df3914ce8bf6e3270406064d8f77d715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8fc138a0e21f52460c4be0f2a842092df3914ce8bf6e3270406064d8f77d715->enter($__internal_b8fc138a0e21f52460c4be0f2a842092df3914ce8bf6e3270406064d8f77d715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_1b3339e1d07183c6d5e575fb971cb93bf9ae6c84ec78ffeb75d47907584a5693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3339e1d07183c6d5e575fb971cb93bf9ae6c84ec78ffeb75d47907584a5693->enter($__internal_1b3339e1d07183c6d5e575fb971cb93bf9ae6c84ec78ffeb75d47907584a5693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8fc138a0e21f52460c4be0f2a842092df3914ce8bf6e3270406064d8f77d715->leave($__internal_b8fc138a0e21f52460c4be0f2a842092df3914ce8bf6e3270406064d8f77d715_prof);

        
        $__internal_1b3339e1d07183c6d5e575fb971cb93bf9ae6c84ec78ffeb75d47907584a5693->leave($__internal_1b3339e1d07183c6d5e575fb971cb93bf9ae6c84ec78ffeb75d47907584a5693_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1263137f2e3fb5243da4d74b32c5bc325765994e19669e7956c31596de28d872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1263137f2e3fb5243da4d74b32c5bc325765994e19669e7956c31596de28d872->enter($__internal_1263137f2e3fb5243da4d74b32c5bc325765994e19669e7956c31596de28d872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b2619b30270dd5557d0a47601fd38fe0795ad6eadc0ada7c80e06d5f3c56d70c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2619b30270dd5557d0a47601fd38fe0795ad6eadc0ada7c80e06d5f3c56d70c->enter($__internal_b2619b30270dd5557d0a47601fd38fe0795ad6eadc0ada7c80e06d5f3c56d70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b2619b30270dd5557d0a47601fd38fe0795ad6eadc0ada7c80e06d5f3c56d70c->leave($__internal_b2619b30270dd5557d0a47601fd38fe0795ad6eadc0ada7c80e06d5f3c56d70c_prof);

        
        $__internal_1263137f2e3fb5243da4d74b32c5bc325765994e19669e7956c31596de28d872->leave($__internal_1263137f2e3fb5243da4d74b32c5bc325765994e19669e7956c31596de28d872_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
