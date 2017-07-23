<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_82882cea376725de34eb85d5e74e8099aa43dda6e9d812461008b5f374b097cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_a9892107a5963915c849b32eb461657090a9e6cecbafd05bccccfade3d27f9cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9892107a5963915c849b32eb461657090a9e6cecbafd05bccccfade3d27f9cb->enter($__internal_a9892107a5963915c849b32eb461657090a9e6cecbafd05bccccfade3d27f9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_92df0deee8b400fdecc713ef0ed315a3f9933799c43f9e457a78b70bbfc20bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92df0deee8b400fdecc713ef0ed315a3f9933799c43f9e457a78b70bbfc20bec->enter($__internal_92df0deee8b400fdecc713ef0ed315a3f9933799c43f9e457a78b70bbfc20bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9892107a5963915c849b32eb461657090a9e6cecbafd05bccccfade3d27f9cb->leave($__internal_a9892107a5963915c849b32eb461657090a9e6cecbafd05bccccfade3d27f9cb_prof);

        
        $__internal_92df0deee8b400fdecc713ef0ed315a3f9933799c43f9e457a78b70bbfc20bec->leave($__internal_92df0deee8b400fdecc713ef0ed315a3f9933799c43f9e457a78b70bbfc20bec_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea974be7389b901b298d56c0925b6038acf4ea9775953adfe78f26838dd3de61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea974be7389b901b298d56c0925b6038acf4ea9775953adfe78f26838dd3de61->enter($__internal_ea974be7389b901b298d56c0925b6038acf4ea9775953adfe78f26838dd3de61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9de6577bfb3116d7766f392ed8b0c29abb2e2cb122c4cbca24d4506a53fc6925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de6577bfb3116d7766f392ed8b0c29abb2e2cb122c4cbca24d4506a53fc6925->enter($__internal_9de6577bfb3116d7766f392ed8b0c29abb2e2cb122c4cbca24d4506a53fc6925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9de6577bfb3116d7766f392ed8b0c29abb2e2cb122c4cbca24d4506a53fc6925->leave($__internal_9de6577bfb3116d7766f392ed8b0c29abb2e2cb122c4cbca24d4506a53fc6925_prof);

        
        $__internal_ea974be7389b901b298d56c0925b6038acf4ea9775953adfe78f26838dd3de61->leave($__internal_ea974be7389b901b298d56c0925b6038acf4ea9775953adfe78f26838dd3de61_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
