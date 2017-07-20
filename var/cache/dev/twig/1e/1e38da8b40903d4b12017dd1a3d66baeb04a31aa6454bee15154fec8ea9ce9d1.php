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
        $__internal_dabf2e2f7047641ee084b60ca7d320bdb44dc8639cf37e502bcb4e4436b55fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dabf2e2f7047641ee084b60ca7d320bdb44dc8639cf37e502bcb4e4436b55fda->enter($__internal_dabf2e2f7047641ee084b60ca7d320bdb44dc8639cf37e502bcb4e4436b55fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_9251d55ee8ab3fd0689ff68ee6f450f559006337a0381df82c6741c41b19379b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9251d55ee8ab3fd0689ff68ee6f450f559006337a0381df82c6741c41b19379b->enter($__internal_9251d55ee8ab3fd0689ff68ee6f450f559006337a0381df82c6741c41b19379b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dabf2e2f7047641ee084b60ca7d320bdb44dc8639cf37e502bcb4e4436b55fda->leave($__internal_dabf2e2f7047641ee084b60ca7d320bdb44dc8639cf37e502bcb4e4436b55fda_prof);

        
        $__internal_9251d55ee8ab3fd0689ff68ee6f450f559006337a0381df82c6741c41b19379b->leave($__internal_9251d55ee8ab3fd0689ff68ee6f450f559006337a0381df82c6741c41b19379b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f289ddd589a16d9ffa00e4aed168aa66ddbb061d367594648f690db5925cb291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f289ddd589a16d9ffa00e4aed168aa66ddbb061d367594648f690db5925cb291->enter($__internal_f289ddd589a16d9ffa00e4aed168aa66ddbb061d367594648f690db5925cb291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e443f56fb60e58245a7b3a0aa012b125894624cc6bbcf3ad5ed5a376d754022f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e443f56fb60e58245a7b3a0aa012b125894624cc6bbcf3ad5ed5a376d754022f->enter($__internal_e443f56fb60e58245a7b3a0aa012b125894624cc6bbcf3ad5ed5a376d754022f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_e443f56fb60e58245a7b3a0aa012b125894624cc6bbcf3ad5ed5a376d754022f->leave($__internal_e443f56fb60e58245a7b3a0aa012b125894624cc6bbcf3ad5ed5a376d754022f_prof);

        
        $__internal_f289ddd589a16d9ffa00e4aed168aa66ddbb061d367594648f690db5925cb291->leave($__internal_f289ddd589a16d9ffa00e4aed168aa66ddbb061d367594648f690db5925cb291_prof);

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
