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
        $__internal_ab1c213bc4f50479651ae4ffd4823b14bdc61cc22f51124ffdd9cab99c6983e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab1c213bc4f50479651ae4ffd4823b14bdc61cc22f51124ffdd9cab99c6983e5->enter($__internal_ab1c213bc4f50479651ae4ffd4823b14bdc61cc22f51124ffdd9cab99c6983e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_36dbda9195a6c20a18518c5c5feb6d44da61a54b2e41763816cef62258a213a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36dbda9195a6c20a18518c5c5feb6d44da61a54b2e41763816cef62258a213a7->enter($__internal_36dbda9195a6c20a18518c5c5feb6d44da61a54b2e41763816cef62258a213a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab1c213bc4f50479651ae4ffd4823b14bdc61cc22f51124ffdd9cab99c6983e5->leave($__internal_ab1c213bc4f50479651ae4ffd4823b14bdc61cc22f51124ffdd9cab99c6983e5_prof);

        
        $__internal_36dbda9195a6c20a18518c5c5feb6d44da61a54b2e41763816cef62258a213a7->leave($__internal_36dbda9195a6c20a18518c5c5feb6d44da61a54b2e41763816cef62258a213a7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9004a60e633e8c6b42bf1c21af2fc297f95651618c215fe065e2fb8e6a61b36a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9004a60e633e8c6b42bf1c21af2fc297f95651618c215fe065e2fb8e6a61b36a->enter($__internal_9004a60e633e8c6b42bf1c21af2fc297f95651618c215fe065e2fb8e6a61b36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6c46599563f2f8ed83046366ca4d96f40851ce08fcd34adfc32eb634c7b66c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c46599563f2f8ed83046366ca4d96f40851ce08fcd34adfc32eb634c7b66c4c->enter($__internal_6c46599563f2f8ed83046366ca4d96f40851ce08fcd34adfc32eb634c7b66c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6c46599563f2f8ed83046366ca4d96f40851ce08fcd34adfc32eb634c7b66c4c->leave($__internal_6c46599563f2f8ed83046366ca4d96f40851ce08fcd34adfc32eb634c7b66c4c_prof);

        
        $__internal_9004a60e633e8c6b42bf1c21af2fc297f95651618c215fe065e2fb8e6a61b36a->leave($__internal_9004a60e633e8c6b42bf1c21af2fc297f95651618c215fe065e2fb8e6a61b36a_prof);

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
