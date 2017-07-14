<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6fb9997f97eaaaff7499c141c6eff38c9bb4758e148e9182a88e58534df6a143 extends Twig_Template
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
        $__internal_afffb69256a984b582e7c6410b78ca77fec9046ae1acff705c9ffa68b4feba4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afffb69256a984b582e7c6410b78ca77fec9046ae1acff705c9ffa68b4feba4f->enter($__internal_afffb69256a984b582e7c6410b78ca77fec9046ae1acff705c9ffa68b4feba4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_1e81531052d0ea47ed332c7dc863d13425bf7c67a12aa84cc4001b77abd3ff6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e81531052d0ea47ed332c7dc863d13425bf7c67a12aa84cc4001b77abd3ff6e->enter($__internal_1e81531052d0ea47ed332c7dc863d13425bf7c67a12aa84cc4001b77abd3ff6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_afffb69256a984b582e7c6410b78ca77fec9046ae1acff705c9ffa68b4feba4f->leave($__internal_afffb69256a984b582e7c6410b78ca77fec9046ae1acff705c9ffa68b4feba4f_prof);

        
        $__internal_1e81531052d0ea47ed332c7dc863d13425bf7c67a12aa84cc4001b77abd3ff6e->leave($__internal_1e81531052d0ea47ed332c7dc863d13425bf7c67a12aa84cc4001b77abd3ff6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
