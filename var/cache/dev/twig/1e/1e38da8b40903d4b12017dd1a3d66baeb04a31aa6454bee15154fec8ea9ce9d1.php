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
        $__internal_3936407a8c0c27068249b4225f143912db1d5c47ada7ef0c3d67f19b9a179fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3936407a8c0c27068249b4225f143912db1d5c47ada7ef0c3d67f19b9a179fed->enter($__internal_3936407a8c0c27068249b4225f143912db1d5c47ada7ef0c3d67f19b9a179fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_b50f94ca1b22cdad9559109f48cd6c521218763d89709a55c865579268b4ffa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50f94ca1b22cdad9559109f48cd6c521218763d89709a55c865579268b4ffa2->enter($__internal_b50f94ca1b22cdad9559109f48cd6c521218763d89709a55c865579268b4ffa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3936407a8c0c27068249b4225f143912db1d5c47ada7ef0c3d67f19b9a179fed->leave($__internal_3936407a8c0c27068249b4225f143912db1d5c47ada7ef0c3d67f19b9a179fed_prof);

        
        $__internal_b50f94ca1b22cdad9559109f48cd6c521218763d89709a55c865579268b4ffa2->leave($__internal_b50f94ca1b22cdad9559109f48cd6c521218763d89709a55c865579268b4ffa2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_454170cd51b8bb5bf9ed6ec62a7acfc7cb7e2918c85a39f2d4422d630b356854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454170cd51b8bb5bf9ed6ec62a7acfc7cb7e2918c85a39f2d4422d630b356854->enter($__internal_454170cd51b8bb5bf9ed6ec62a7acfc7cb7e2918c85a39f2d4422d630b356854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_26f86ed7255c2bdceba67a2e9475e45e5d70a7e6eb0c483cf3579a914b1cd259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f86ed7255c2bdceba67a2e9475e45e5d70a7e6eb0c483cf3579a914b1cd259->enter($__internal_26f86ed7255c2bdceba67a2e9475e45e5d70a7e6eb0c483cf3579a914b1cd259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_26f86ed7255c2bdceba67a2e9475e45e5d70a7e6eb0c483cf3579a914b1cd259->leave($__internal_26f86ed7255c2bdceba67a2e9475e45e5d70a7e6eb0c483cf3579a914b1cd259_prof);

        
        $__internal_454170cd51b8bb5bf9ed6ec62a7acfc7cb7e2918c85a39f2d4422d630b356854->leave($__internal_454170cd51b8bb5bf9ed6ec62a7acfc7cb7e2918c85a39f2d4422d630b356854_prof);

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
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
