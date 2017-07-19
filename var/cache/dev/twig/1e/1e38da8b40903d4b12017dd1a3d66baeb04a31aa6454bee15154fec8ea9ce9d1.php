<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_4d85921b64ffb363dbf6ceeeb5a682f3268837fb15c3d16a0fcb385b24c75c65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_19724fbc64f276027c572963871796bab9319bfc7c3f67887693116522413549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19724fbc64f276027c572963871796bab9319bfc7c3f67887693116522413549->enter($__internal_19724fbc64f276027c572963871796bab9319bfc7c3f67887693116522413549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_572af92187d6ec3c4dc6242e2d480f7454f71a184b412adf92a21b89a157c546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572af92187d6ec3c4dc6242e2d480f7454f71a184b412adf92a21b89a157c546->enter($__internal_572af92187d6ec3c4dc6242e2d480f7454f71a184b412adf92a21b89a157c546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19724fbc64f276027c572963871796bab9319bfc7c3f67887693116522413549->leave($__internal_19724fbc64f276027c572963871796bab9319bfc7c3f67887693116522413549_prof);

        
        $__internal_572af92187d6ec3c4dc6242e2d480f7454f71a184b412adf92a21b89a157c546->leave($__internal_572af92187d6ec3c4dc6242e2d480f7454f71a184b412adf92a21b89a157c546_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d536a95aa321dd18ed700f97439dc7d5c4128aa2ddba2ae5dc6c294c71732f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d536a95aa321dd18ed700f97439dc7d5c4128aa2ddba2ae5dc6c294c71732f27->enter($__internal_d536a95aa321dd18ed700f97439dc7d5c4128aa2ddba2ae5dc6c294c71732f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ce5d603f48178b692cf9428a182a3ab4d05e976da22ed92fd345a32135c6f56e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5d603f48178b692cf9428a182a3ab4d05e976da22ed92fd345a32135c6f56e->enter($__internal_ce5d603f48178b692cf9428a182a3ab4d05e976da22ed92fd345a32135c6f56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ce5d603f48178b692cf9428a182a3ab4d05e976da22ed92fd345a32135c6f56e->leave($__internal_ce5d603f48178b692cf9428a182a3ab4d05e976da22ed92fd345a32135c6f56e_prof);

        
        $__internal_d536a95aa321dd18ed700f97439dc7d5c4128aa2ddba2ae5dc6c294c71732f27->leave($__internal_d536a95aa321dd18ed700f97439dc7d5c4128aa2ddba2ae5dc6c294c71732f27_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
