<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_54674d6fa466e81942e3584e3ca63a3d697def45995263ed4bb3355e57797204 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3d439c679dfe87a9a534e7df7d7a8653ed99ee9b8a5b29175d84ebbee311dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3d439c679dfe87a9a534e7df7d7a8653ed99ee9b8a5b29175d84ebbee311dc7->enter($__internal_f3d439c679dfe87a9a534e7df7d7a8653ed99ee9b8a5b29175d84ebbee311dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_5adb640d61cc94720d17d17de9d2db005895719c5d6e7c0d91924db12a5721c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5adb640d61cc94720d17d17de9d2db005895719c5d6e7c0d91924db12a5721c5->enter($__internal_5adb640d61cc94720d17d17de9d2db005895719c5d6e7c0d91924db12a5721c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f3d439c679dfe87a9a534e7df7d7a8653ed99ee9b8a5b29175d84ebbee311dc7->leave($__internal_f3d439c679dfe87a9a534e7df7d7a8653ed99ee9b8a5b29175d84ebbee311dc7_prof);

        
        $__internal_5adb640d61cc94720d17d17de9d2db005895719c5d6e7c0d91924db12a5721c5->leave($__internal_5adb640d61cc94720d17d17de9d2db005895719c5d6e7c0d91924db12a5721c5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_48128360c99e5c601506275f514c74676dc9ee0aa180459874fdc665691f2fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48128360c99e5c601506275f514c74676dc9ee0aa180459874fdc665691f2fde->enter($__internal_48128360c99e5c601506275f514c74676dc9ee0aa180459874fdc665691f2fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2c36eea85f021e7699e06b77686eb850bd84c04eee62db35d3a432a3fffb0045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c36eea85f021e7699e06b77686eb850bd84c04eee62db35d3a432a3fffb0045->enter($__internal_2c36eea85f021e7699e06b77686eb850bd84c04eee62db35d3a432a3fffb0045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_2c36eea85f021e7699e06b77686eb850bd84c04eee62db35d3a432a3fffb0045->leave($__internal_2c36eea85f021e7699e06b77686eb850bd84c04eee62db35d3a432a3fffb0045_prof);

        
        $__internal_48128360c99e5c601506275f514c74676dc9ee0aa180459874fdc665691f2fde->leave($__internal_48128360c99e5c601506275f514c74676dc9ee0aa180459874fdc665691f2fde_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f4ca799fdfefc175e9c5d9aba5f627c0db58ca0f8446e962a542dbc35901a7c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ca799fdfefc175e9c5d9aba5f627c0db58ca0f8446e962a542dbc35901a7c2->enter($__internal_f4ca799fdfefc175e9c5d9aba5f627c0db58ca0f8446e962a542dbc35901a7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d191ae379f12eac042ce7ac0fcb6309b9465ed46f9072d6147fc111dc49f27c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d191ae379f12eac042ce7ac0fcb6309b9465ed46f9072d6147fc111dc49f27c7->enter($__internal_d191ae379f12eac042ce7ac0fcb6309b9465ed46f9072d6147fc111dc49f27c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d191ae379f12eac042ce7ac0fcb6309b9465ed46f9072d6147fc111dc49f27c7->leave($__internal_d191ae379f12eac042ce7ac0fcb6309b9465ed46f9072d6147fc111dc49f27c7_prof);

        
        $__internal_f4ca799fdfefc175e9c5d9aba5f627c0db58ca0f8446e962a542dbc35901a7c2->leave($__internal_f4ca799fdfefc175e9c5d9aba5f627c0db58ca0f8446e962a542dbc35901a7c2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2ae7b4ba1f2f0b26ec67a4d1b37500989e9d65847c98c2d7f569e0ff5563da1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae7b4ba1f2f0b26ec67a4d1b37500989e9d65847c98c2d7f569e0ff5563da1b->enter($__internal_2ae7b4ba1f2f0b26ec67a4d1b37500989e9d65847c98c2d7f569e0ff5563da1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_0abce58cc09f0320cf59d9c86668e152174240be17d149ccc1d2d30b7589e3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0abce58cc09f0320cf59d9c86668e152174240be17d149ccc1d2d30b7589e3b8->enter($__internal_0abce58cc09f0320cf59d9c86668e152174240be17d149ccc1d2d30b7589e3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0abce58cc09f0320cf59d9c86668e152174240be17d149ccc1d2d30b7589e3b8->leave($__internal_0abce58cc09f0320cf59d9c86668e152174240be17d149ccc1d2d30b7589e3b8_prof);

        
        $__internal_2ae7b4ba1f2f0b26ec67a4d1b37500989e9d65847c98c2d7f569e0ff5563da1b->leave($__internal_2ae7b4ba1f2f0b26ec67a4d1b37500989e9d65847c98c2d7f569e0ff5563da1b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
