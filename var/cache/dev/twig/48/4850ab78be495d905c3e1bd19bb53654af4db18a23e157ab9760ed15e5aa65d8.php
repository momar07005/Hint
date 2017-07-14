<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_94b3ea64fabda46e20ee47a4d49c2030e52788807924e1ac5babb68a2e0fa9eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_7b490696b36d0acd20926020e84495743ff6bc99d641cc3fd1275f08a3b8c3b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b490696b36d0acd20926020e84495743ff6bc99d641cc3fd1275f08a3b8c3b6->enter($__internal_7b490696b36d0acd20926020e84495743ff6bc99d641cc3fd1275f08a3b8c3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_843cc8dfbcaf3e6275bd70cbe346dad7ad01580e678eff22d745ced82638ee89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843cc8dfbcaf3e6275bd70cbe346dad7ad01580e678eff22d745ced82638ee89->enter($__internal_843cc8dfbcaf3e6275bd70cbe346dad7ad01580e678eff22d745ced82638ee89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b490696b36d0acd20926020e84495743ff6bc99d641cc3fd1275f08a3b8c3b6->leave($__internal_7b490696b36d0acd20926020e84495743ff6bc99d641cc3fd1275f08a3b8c3b6_prof);

        
        $__internal_843cc8dfbcaf3e6275bd70cbe346dad7ad01580e678eff22d745ced82638ee89->leave($__internal_843cc8dfbcaf3e6275bd70cbe346dad7ad01580e678eff22d745ced82638ee89_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58248d8fd29e070f30f1930a0b1593926b03e930e429146c1634c75ad7c26cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58248d8fd29e070f30f1930a0b1593926b03e930e429146c1634c75ad7c26cc2->enter($__internal_58248d8fd29e070f30f1930a0b1593926b03e930e429146c1634c75ad7c26cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a9ce6ad7b90649d1d0d01dd42d999f66af7b05fc5197e1dc491361eef87d9ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ce6ad7b90649d1d0d01dd42d999f66af7b05fc5197e1dc491361eef87d9ea2->enter($__internal_a9ce6ad7b90649d1d0d01dd42d999f66af7b05fc5197e1dc491361eef87d9ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_a9ce6ad7b90649d1d0d01dd42d999f66af7b05fc5197e1dc491361eef87d9ea2->leave($__internal_a9ce6ad7b90649d1d0d01dd42d999f66af7b05fc5197e1dc491361eef87d9ea2_prof);

        
        $__internal_58248d8fd29e070f30f1930a0b1593926b03e930e429146c1634c75ad7c26cc2->leave($__internal_58248d8fd29e070f30f1930a0b1593926b03e930e429146c1634c75ad7c26cc2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
