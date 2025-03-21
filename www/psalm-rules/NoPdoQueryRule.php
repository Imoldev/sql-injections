<?php
declare(strict_types=1);

use Psalm\CodeLocation;
use Psalm\Issue\PluginIssue;
use Psalm\IssueBuffer;
use Psalm\Plugin\EventHandler\AfterMethodCallAnalysisInterface;
use Psalm\Plugin\EventHandler\Event\AfterMethodCallAnalysisEvent;

final class NoPdoQueryRule implements AfterMethodCallAnalysisInterface
{

    public static function afterMethodCallAnalysis(AfterMethodCallAnalysisEvent $event): void
    {
        $method = $event->getMethodId();
        $expr = $event->getExpr();
        $statements_source = $event->getStatementsSource();
        if($method === 'PDO::query') {
            IssueBuffer::maybeAdd(
                new NoPDOQuery(
                    'PDO::query',
                    new CodeLocation($statements_source, $expr)
                )
            );
        }

    }
}

final class NoPDOQuery extends PluginIssue
{
}