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
        $__internal_172459d0395f59126240fd1411ad505e54b8030de16c6e62ef9035f0726740f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172459d0395f59126240fd1411ad505e54b8030de16c6e62ef9035f0726740f0->enter($__internal_172459d0395f59126240fd1411ad505e54b8030de16c6e62ef9035f0726740f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e8f007a5693e5754d995985a3a048c5575f01bc849304840d3348d2cd4c0f3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f007a5693e5754d995985a3a048c5575f01bc849304840d3348d2cd4c0f3a9->enter($__internal_e8f007a5693e5754d995985a3a048c5575f01bc849304840d3348d2cd4c0f3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_172459d0395f59126240fd1411ad505e54b8030de16c6e62ef9035f0726740f0->leave($__internal_172459d0395f59126240fd1411ad505e54b8030de16c6e62ef9035f0726740f0_prof);

        
        $__internal_e8f007a5693e5754d995985a3a048c5575f01bc849304840d3348d2cd4c0f3a9->leave($__internal_e8f007a5693e5754d995985a3a048c5575f01bc849304840d3348d2cd4c0f3a9_prof);

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
