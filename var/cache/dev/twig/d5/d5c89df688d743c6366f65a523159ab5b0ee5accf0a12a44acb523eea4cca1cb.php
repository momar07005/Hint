<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_514958e2ebbca0ab400b5f7b13950f2bba7e75dd7219e9db93da65747ce20ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_4d62b8d146a52b80de28797a895f6845266a66dc55b8bb11cc3525f9b0b0afa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d62b8d146a52b80de28797a895f6845266a66dc55b8bb11cc3525f9b0b0afa9->enter($__internal_4d62b8d146a52b80de28797a895f6845266a66dc55b8bb11cc3525f9b0b0afa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_f5d4577ddcc8a5c6121871c1cdbe35e1d841815ef782ab718bd171fe9998bc80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d4577ddcc8a5c6121871c1cdbe35e1d841815ef782ab718bd171fe9998bc80->enter($__internal_f5d4577ddcc8a5c6121871c1cdbe35e1d841815ef782ab718bd171fe9998bc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d62b8d146a52b80de28797a895f6845266a66dc55b8bb11cc3525f9b0b0afa9->leave($__internal_4d62b8d146a52b80de28797a895f6845266a66dc55b8bb11cc3525f9b0b0afa9_prof);

        
        $__internal_f5d4577ddcc8a5c6121871c1cdbe35e1d841815ef782ab718bd171fe9998bc80->leave($__internal_f5d4577ddcc8a5c6121871c1cdbe35e1d841815ef782ab718bd171fe9998bc80_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1b1b27366445274c4e655c51ac147b2303975022ec5e33a4eaec1f63ce87e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b1b27366445274c4e655c51ac147b2303975022ec5e33a4eaec1f63ce87e2f->enter($__internal_a1b1b27366445274c4e655c51ac147b2303975022ec5e33a4eaec1f63ce87e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3195450e7be96a7060773931bc1307a296e5df535e061d1fae3b7093a9bca096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3195450e7be96a7060773931bc1307a296e5df535e061d1fae3b7093a9bca096->enter($__internal_3195450e7be96a7060773931bc1307a296e5df535e061d1fae3b7093a9bca096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_3195450e7be96a7060773931bc1307a296e5df535e061d1fae3b7093a9bca096->leave($__internal_3195450e7be96a7060773931bc1307a296e5df535e061d1fae3b7093a9bca096_prof);

        
        $__internal_a1b1b27366445274c4e655c51ac147b2303975022ec5e33a4eaec1f63ce87e2f->leave($__internal_a1b1b27366445274c4e655c51ac147b2303975022ec5e33a4eaec1f63ce87e2f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
