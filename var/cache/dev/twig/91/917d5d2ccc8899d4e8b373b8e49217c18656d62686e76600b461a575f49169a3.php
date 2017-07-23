<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e25fcc805e0568ffee2ef8fba17725a0de432b9115a772f1b7a63be0d2c3678e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_175c8362c5e9b1f8a0eaa223aac6600a25c09c9e71ded49d85cce95ac80f52b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_175c8362c5e9b1f8a0eaa223aac6600a25c09c9e71ded49d85cce95ac80f52b5->enter($__internal_175c8362c5e9b1f8a0eaa223aac6600a25c09c9e71ded49d85cce95ac80f52b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_6cdbf4873efd0f4905eb781b91047b4a09a4f1875c17113c82a78be32d7d90c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdbf4873efd0f4905eb781b91047b4a09a4f1875c17113c82a78be32d7d90c9->enter($__internal_6cdbf4873efd0f4905eb781b91047b4a09a4f1875c17113c82a78be32d7d90c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_175c8362c5e9b1f8a0eaa223aac6600a25c09c9e71ded49d85cce95ac80f52b5->leave($__internal_175c8362c5e9b1f8a0eaa223aac6600a25c09c9e71ded49d85cce95ac80f52b5_prof);

        
        $__internal_6cdbf4873efd0f4905eb781b91047b4a09a4f1875c17113c82a78be32d7d90c9->leave($__internal_6cdbf4873efd0f4905eb781b91047b4a09a4f1875c17113c82a78be32d7d90c9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46b55070047254ffae4198f75cf9ffbad9720e6eec0998ca73aaa13882ec2939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46b55070047254ffae4198f75cf9ffbad9720e6eec0998ca73aaa13882ec2939->enter($__internal_46b55070047254ffae4198f75cf9ffbad9720e6eec0998ca73aaa13882ec2939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_af946befd833b4711dec6d851838054a08961f067caf3452c77d268a38744569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af946befd833b4711dec6d851838054a08961f067caf3452c77d268a38744569->enter($__internal_af946befd833b4711dec6d851838054a08961f067caf3452c77d268a38744569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_af946befd833b4711dec6d851838054a08961f067caf3452c77d268a38744569->leave($__internal_af946befd833b4711dec6d851838054a08961f067caf3452c77d268a38744569_prof);

        
        $__internal_46b55070047254ffae4198f75cf9ffbad9720e6eec0998ca73aaa13882ec2939->leave($__internal_46b55070047254ffae4198f75cf9ffbad9720e6eec0998ca73aaa13882ec2939_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
