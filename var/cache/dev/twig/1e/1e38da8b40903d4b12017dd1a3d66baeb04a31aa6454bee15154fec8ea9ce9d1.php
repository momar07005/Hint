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
        $__internal_5bab56dc47a479ba6cb85f02666ff18019329a22858cdbd5a1fac64ac2a14fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bab56dc47a479ba6cb85f02666ff18019329a22858cdbd5a1fac64ac2a14fc5->enter($__internal_5bab56dc47a479ba6cb85f02666ff18019329a22858cdbd5a1fac64ac2a14fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_1ef7aa381759f0f901c51436b8859cde23d3e68a2ebd23b55c5a504534196785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef7aa381759f0f901c51436b8859cde23d3e68a2ebd23b55c5a504534196785->enter($__internal_1ef7aa381759f0f901c51436b8859cde23d3e68a2ebd23b55c5a504534196785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bab56dc47a479ba6cb85f02666ff18019329a22858cdbd5a1fac64ac2a14fc5->leave($__internal_5bab56dc47a479ba6cb85f02666ff18019329a22858cdbd5a1fac64ac2a14fc5_prof);

        
        $__internal_1ef7aa381759f0f901c51436b8859cde23d3e68a2ebd23b55c5a504534196785->leave($__internal_1ef7aa381759f0f901c51436b8859cde23d3e68a2ebd23b55c5a504534196785_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da8c05b59e4efe6168c065e89a352632f639acc73554c68314848d3e17743f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8c05b59e4efe6168c065e89a352632f639acc73554c68314848d3e17743f04->enter($__internal_da8c05b59e4efe6168c065e89a352632f639acc73554c68314848d3e17743f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9192a49601e83f5a55233b5a5d94cf3ec3ebd5dedb76ff0d7e048c7db7d4e471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9192a49601e83f5a55233b5a5d94cf3ec3ebd5dedb76ff0d7e048c7db7d4e471->enter($__internal_9192a49601e83f5a55233b5a5d94cf3ec3ebd5dedb76ff0d7e048c7db7d4e471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_9192a49601e83f5a55233b5a5d94cf3ec3ebd5dedb76ff0d7e048c7db7d4e471->leave($__internal_9192a49601e83f5a55233b5a5d94cf3ec3ebd5dedb76ff0d7e048c7db7d4e471_prof);

        
        $__internal_da8c05b59e4efe6168c065e89a352632f639acc73554c68314848d3e17743f04->leave($__internal_da8c05b59e4efe6168c065e89a352632f639acc73554c68314848d3e17743f04_prof);

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
