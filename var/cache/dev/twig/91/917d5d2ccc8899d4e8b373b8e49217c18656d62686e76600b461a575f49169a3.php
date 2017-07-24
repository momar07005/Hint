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
        $__internal_73282000aa0d508fbba06028d5732b49f61c3f9f511a041c49dceae6a3ed7eba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73282000aa0d508fbba06028d5732b49f61c3f9f511a041c49dceae6a3ed7eba->enter($__internal_73282000aa0d508fbba06028d5732b49f61c3f9f511a041c49dceae6a3ed7eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_9eea98b588c654e768537f773fcc9715ab703438c392d818cb5643fe8e00c3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eea98b588c654e768537f773fcc9715ab703438c392d818cb5643fe8e00c3dc->enter($__internal_9eea98b588c654e768537f773fcc9715ab703438c392d818cb5643fe8e00c3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73282000aa0d508fbba06028d5732b49f61c3f9f511a041c49dceae6a3ed7eba->leave($__internal_73282000aa0d508fbba06028d5732b49f61c3f9f511a041c49dceae6a3ed7eba_prof);

        
        $__internal_9eea98b588c654e768537f773fcc9715ab703438c392d818cb5643fe8e00c3dc->leave($__internal_9eea98b588c654e768537f773fcc9715ab703438c392d818cb5643fe8e00c3dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c4659aad44f47b6f6fcb16370372cd109ae011a94621900c2ffa7919b909f905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4659aad44f47b6f6fcb16370372cd109ae011a94621900c2ffa7919b909f905->enter($__internal_c4659aad44f47b6f6fcb16370372cd109ae011a94621900c2ffa7919b909f905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8ced3cb9679093f1814328ffb6b0a0ba119f497c612d7897de9e123654b016cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ced3cb9679093f1814328ffb6b0a0ba119f497c612d7897de9e123654b016cf->enter($__internal_8ced3cb9679093f1814328ffb6b0a0ba119f497c612d7897de9e123654b016cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_8ced3cb9679093f1814328ffb6b0a0ba119f497c612d7897de9e123654b016cf->leave($__internal_8ced3cb9679093f1814328ffb6b0a0ba119f497c612d7897de9e123654b016cf_prof);

        
        $__internal_c4659aad44f47b6f6fcb16370372cd109ae011a94621900c2ffa7919b909f905->leave($__internal_c4659aad44f47b6f6fcb16370372cd109ae011a94621900c2ffa7919b909f905_prof);

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
