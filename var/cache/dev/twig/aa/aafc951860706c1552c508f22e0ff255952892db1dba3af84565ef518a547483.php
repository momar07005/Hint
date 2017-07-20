<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_183ccc2007416f9fa3f41ee49e356a765125a0347fe719845f04ae7085a3c461 extends Twig_Template
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
        $__internal_204cfcb341ca4e6aa4236eca891790b2340659fc22916d695052ce54d2bd4065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204cfcb341ca4e6aa4236eca891790b2340659fc22916d695052ce54d2bd4065->enter($__internal_204cfcb341ca4e6aa4236eca891790b2340659fc22916d695052ce54d2bd4065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_0de3e513accdad120b16b412966f9af1e4d7dab3905bbacda29d26ce4f0189cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de3e513accdad120b16b412966f9af1e4d7dab3905bbacda29d26ce4f0189cc->enter($__internal_0de3e513accdad120b16b412966f9af1e4d7dab3905bbacda29d26ce4f0189cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_204cfcb341ca4e6aa4236eca891790b2340659fc22916d695052ce54d2bd4065->leave($__internal_204cfcb341ca4e6aa4236eca891790b2340659fc22916d695052ce54d2bd4065_prof);

        
        $__internal_0de3e513accdad120b16b412966f9af1e4d7dab3905bbacda29d26ce4f0189cc->leave($__internal_0de3e513accdad120b16b412966f9af1e4d7dab3905bbacda29d26ce4f0189cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
