<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_233bc30afc42219a9240333166f04a0ba4bb96b62e43c2fdde6fc8bf43ef07b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_bc8729d87edd4e1962c0e9219d806c77be2c3136af1f6b632681b51c3160a471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc8729d87edd4e1962c0e9219d806c77be2c3136af1f6b632681b51c3160a471->enter($__internal_bc8729d87edd4e1962c0e9219d806c77be2c3136af1f6b632681b51c3160a471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_d517b5106d647c9a601d50d688c0cf18fbbca56e66555d844adff865a003349f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d517b5106d647c9a601d50d688c0cf18fbbca56e66555d844adff865a003349f->enter($__internal_d517b5106d647c9a601d50d688c0cf18fbbca56e66555d844adff865a003349f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc8729d87edd4e1962c0e9219d806c77be2c3136af1f6b632681b51c3160a471->leave($__internal_bc8729d87edd4e1962c0e9219d806c77be2c3136af1f6b632681b51c3160a471_prof);

        
        $__internal_d517b5106d647c9a601d50d688c0cf18fbbca56e66555d844adff865a003349f->leave($__internal_d517b5106d647c9a601d50d688c0cf18fbbca56e66555d844adff865a003349f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4418679ab3c3f7bc7b4f87ddfa4817132fe990372687667469bb660314800d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4418679ab3c3f7bc7b4f87ddfa4817132fe990372687667469bb660314800d3b->enter($__internal_4418679ab3c3f7bc7b4f87ddfa4817132fe990372687667469bb660314800d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d83b3aef60f1864a66f3768d7bfb4f0c5ec77700f50a28d3950abfe35389af48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83b3aef60f1864a66f3768d7bfb4f0c5ec77700f50a28d3950abfe35389af48->enter($__internal_d83b3aef60f1864a66f3768d7bfb4f0c5ec77700f50a28d3950abfe35389af48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        // line 5
        echo "\t<script>
\t    \$(function() {
\t        \$('.register').hide();
\t    });
\t </script>
";
        
        $__internal_d83b3aef60f1864a66f3768d7bfb4f0c5ec77700f50a28d3950abfe35389af48->leave($__internal_d83b3aef60f1864a66f3768d7bfb4f0c5ec77700f50a28d3950abfe35389af48_prof);

        
        $__internal_4418679ab3c3f7bc7b4f87ddfa4817132fe990372687667469bb660314800d3b->leave($__internal_4418679ab3c3f7bc7b4f87ddfa4817132fe990372687667469bb660314800d3b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
\t{% include \"@FOSUser/Registration/register_content.html.twig\" %}
\t<script>
\t    \$(function() {
\t        \$('.register').hide();
\t    });
\t </script>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
