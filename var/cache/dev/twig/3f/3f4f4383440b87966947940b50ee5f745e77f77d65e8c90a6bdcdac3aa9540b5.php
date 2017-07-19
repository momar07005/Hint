<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_989c83de36f18a95870d39b60b5baabcebeef6da491026b3db53117dad33b771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd00c01b67b18b1af34157ec29efe8a59e117e4c250f72efc72c4d645239854c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd00c01b67b18b1af34157ec29efe8a59e117e4c250f72efc72c4d645239854c->enter($__internal_fd00c01b67b18b1af34157ec29efe8a59e117e4c250f72efc72c4d645239854c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_cc4a7366e4908d8298566a0de70b102901cf6c832757b96af94e440ca4af3c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4a7366e4908d8298566a0de70b102901cf6c832757b96af94e440ca4af3c42->enter($__internal_cc4a7366e4908d8298566a0de70b102901cf6c832757b96af94e440ca4af3c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_fd00c01b67b18b1af34157ec29efe8a59e117e4c250f72efc72c4d645239854c->leave($__internal_fd00c01b67b18b1af34157ec29efe8a59e117e4c250f72efc72c4d645239854c_prof);

        
        $__internal_cc4a7366e4908d8298566a0de70b102901cf6c832757b96af94e440ca4af3c42->leave($__internal_cc4a7366e4908d8298566a0de70b102901cf6c832757b96af94e440ca4af3c42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
