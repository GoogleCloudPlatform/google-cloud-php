<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/query_plan.proto

namespace Google\Cloud\Spanner\V1;

/**
 * <pre>
 * The kind of [PlanNode][google.spanner.v1.PlanNode]. Distinguishes between the two different kinds of
 * nodes that can appear in a query plan.
 * </pre>
 *
 * Protobuf enum <code>google.spanner.v1.PlanNode.Kind</code>
 */
class PlanNode_Kind
{
    /**
     * <pre>
     * Not specified.
     * </pre>
     *
     * <code>KIND_UNSPECIFIED = 0;</code>
     */
    const KIND_UNSPECIFIED = 0;
    /**
     * <pre>
     * Denotes a Relational operator node in the expression tree. Relational
     * operators represent iterative processing of rows during query execution.
     * For example, a `TableScan` operation that reads rows from a table.
     * </pre>
     *
     * <code>RELATIONAL = 1;</code>
     */
    const RELATIONAL = 1;
    /**
     * <pre>
     * Denotes a Scalar node in the expression tree. Scalar nodes represent
     * non-iterable entities in the query plan. For example, constants or
     * arithmetic operators appearing inside predicate expressions or references
     * to column names.
     * </pre>
     *
     * <code>SCALAR = 2;</code>
     */
    const SCALAR = 2;
}

