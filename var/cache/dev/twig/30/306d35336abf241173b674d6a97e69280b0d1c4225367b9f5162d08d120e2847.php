<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_63a78e45f285da395fc8a9af3344dd24563c7e334e44e148df4828b03e0f05ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_f342838749c6926c53b3084b77ce6fb5bddb299c8285692e44480c9d150ae4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f342838749c6926c53b3084b77ce6fb5bddb299c8285692e44480c9d150ae4c7->enter($__internal_f342838749c6926c53b3084b77ce6fb5bddb299c8285692e44480c9d150ae4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_2103dce6c537ff89c9088f0f3791be384c35f7566aa38b7c622f3ae75a12b493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2103dce6c537ff89c9088f0f3791be384c35f7566aa38b7c622f3ae75a12b493->enter($__internal_2103dce6c537ff89c9088f0f3791be384c35f7566aa38b7c622f3ae75a12b493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f342838749c6926c53b3084b77ce6fb5bddb299c8285692e44480c9d150ae4c7->leave($__internal_f342838749c6926c53b3084b77ce6fb5bddb299c8285692e44480c9d150ae4c7_prof);

        
        $__internal_2103dce6c537ff89c9088f0f3791be384c35f7566aa38b7c622f3ae75a12b493->leave($__internal_2103dce6c537ff89c9088f0f3791be384c35f7566aa38b7c622f3ae75a12b493_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea69ae98a66adbac484d24c336b93d2605e2617c6cf37e13698100a4115e827b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea69ae98a66adbac484d24c336b93d2605e2617c6cf37e13698100a4115e827b->enter($__internal_ea69ae98a66adbac484d24c336b93d2605e2617c6cf37e13698100a4115e827b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c095ea93881727023c56e09d15c03bdbc0c899c69b95c6cf0ff4f0ddb4e0bb0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c095ea93881727023c56e09d15c03bdbc0c899c69b95c6cf0ff4f0ddb4e0bb0f->enter($__internal_c095ea93881727023c56e09d15c03bdbc0c899c69b95c6cf0ff4f0ddb4e0bb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c095ea93881727023c56e09d15c03bdbc0c899c69b95c6cf0ff4f0ddb4e0bb0f->leave($__internal_c095ea93881727023c56e09d15c03bdbc0c899c69b95c6cf0ff4f0ddb4e0bb0f_prof);

        
        $__internal_ea69ae98a66adbac484d24c336b93d2605e2617c6cf37e13698100a4115e827b->leave($__internal_ea69ae98a66adbac484d24c336b93d2605e2617c6cf37e13698100a4115e827b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
