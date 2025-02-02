<?php

namespace App\Models {

    /**
     * App\Models\Service
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Service query()
     * @method static mixed select($columns)
     * @method static mixed selectSub($query, $as)
     * @method static mixed selectRaw($expression, array $bindings)
     * @method static mixed fromSub($query, $as)
     * @method static mixed fromRaw($expression, $bindings)
     * @method static mixed addSelect($column)
     * @method static mixed distinct()
     * @method static mixed from($table, $as)
     * @method static mixed useIndex($index)
     * @method static mixed forceIndex($index)
     * @method static mixed ignoreIndex($index)
     * @method static mixed join($table, $first, $operator, $second, $type, $where)
     * @method static mixed joinWhere($table, $first, $operator, $second, $type)
     * @method static mixed joinSub($query, $as, $first, $operator, $second, $type, $where)
     * @method static mixed joinLateral($query, string $as, string $type)
     * @method static mixed leftJoinLateral($query, string $as)
     * @method static mixed leftJoin($table, $first, $operator, $second)
     * @method static mixed leftJoinWhere($table, $first, $operator, $second)
     * @method static mixed leftJoinSub($query, $as, $first, $operator, $second)
     * @method static mixed rightJoin($table, $first, $operator, $second)
     * @method static mixed rightJoinWhere($table, $first, $operator, $second)
     * @method static mixed rightJoinSub($query, $as, $first, $operator, $second)
     * @method static mixed crossJoin($table, $first, $operator, $second)
     * @method static mixed crossJoinSub($query, $as)
     * @method static mixed mergeWheres($wheres, $bindings)
     * @method static mixed where($column, $operator, $value, $boolean)
     * @method static mixed prepareValueAndOperator($value, $operator, $useDefault)
     * @method static mixed orWhere($column, $operator, $value)
     * @method static mixed whereNot($column, $operator, $value, $boolean)
     * @method static mixed orWhereNot($column, $operator, $value)
     * @method static mixed whereColumn($first, $operator, $second, $boolean)
     * @method static mixed orWhereColumn($first, $operator, $second)
     * @method static mixed whereRaw($sql, $bindings, $boolean)
     * @method static mixed orWhereRaw($sql, $bindings)
     * @method static mixed whereLike($column, $value, $caseSensitive, $boolean, $not)
     * @method static mixed orWhereLike($column, $value, $caseSensitive)
     * @method static mixed whereNotLike($column, $value, $caseSensitive, $boolean)
     * @method static mixed orWhereNotLike($column, $value, $caseSensitive)
     * @method static mixed whereIn($column, $values, $boolean, $not)
     * @method static mixed orWhereIn($column, $values)
     * @method static mixed whereNotIn($column, $values, $boolean)
     * @method static mixed orWhereNotIn($column, $values)
     * @method static mixed whereIntegerInRaw($column, $values, $boolean, $not)
     * @method static mixed orWhereIntegerInRaw($column, $values)
     * @method static mixed whereIntegerNotInRaw($column, $values, $boolean)
     * @method static mixed orWhereIntegerNotInRaw($column, $values)
     * @method static mixed whereNull($columns, $boolean, $not)
     * @method static mixed orWhereNull($column)
     * @method static mixed whereNotNull($columns, $boolean)
     * @method static mixed whereBetween($column, iterable $values, $boolean, $not)
     * @method static mixed whereBetweenColumns($column, array $values, $boolean, $not)
     * @method static mixed orWhereBetween($column, iterable $values)
     * @method static mixed orWhereBetweenColumns($column, array $values)
     * @method static mixed whereNotBetween($column, iterable $values, $boolean)
     * @method static mixed whereNotBetweenColumns($column, array $values, $boolean)
     * @method static mixed orWhereNotBetween($column, iterable $values)
     * @method static mixed orWhereNotBetweenColumns($column, array $values)
     * @method static mixed orWhereNotNull($column)
     * @method static mixed whereDate($column, $operator, $value, $boolean)
     * @method static mixed orWhereDate($column, $operator, $value)
     * @method static mixed whereTime($column, $operator, $value, $boolean)
     * @method static mixed orWhereTime($column, $operator, $value)
     * @method static mixed whereDay($column, $operator, $value, $boolean)
     * @method static mixed orWhereDay($column, $operator, $value)
     * @method static mixed whereMonth($column, $operator, $value, $boolean)
     * @method static mixed orWhereMonth($column, $operator, $value)
     * @method static mixed whereYear($column, $operator, $value, $boolean)
     * @method static mixed orWhereYear($column, $operator, $value)
     * @method static mixed whereNested(Closure $callback, $boolean)
     * @method static mixed forNestedWhere()
     * @method static mixed addNestedWhereQuery($query, $boolean)
     * @method static mixed whereExists($callback, $boolean, $not)
     * @method static mixed orWhereExists($callback, $not)
     * @method static mixed whereNotExists($callback, $boolean)
     * @method static mixed orWhereNotExists($callback)
     * @method static mixed addWhereExistsQuery(self $query, $boolean, $not)
     * @method static mixed whereRowValues($columns, $operator, $values, $boolean)
     * @method static mixed orWhereRowValues($columns, $operator, $values)
     * @method static mixed whereJsonContains($column, $value, $boolean, $not)
     * @method static mixed orWhereJsonContains($column, $value)
     * @method static mixed whereJsonDoesntContain($column, $value, $boolean)
     * @method static mixed orWhereJsonDoesntContain($column, $value)
     * @method static mixed whereJsonOverlaps($column, $value, $boolean, $not)
     * @method static mixed orWhereJsonOverlaps($column, $value)
     * @method static mixed whereJsonDoesntOverlap($column, $value, $boolean)
     * @method static mixed orWhereJsonDoesntOverlap($column, $value)
     * @method static mixed whereJsonContainsKey($column, $boolean, $not)
     * @method static mixed orWhereJsonContainsKey($column)
     * @method static mixed whereJsonDoesntContainKey($column, $boolean)
     * @method static mixed orWhereJsonDoesntContainKey($column)
     * @method static mixed whereJsonLength($column, $operator, $value, $boolean)
     * @method static mixed orWhereJsonLength($column, $operator, $value)
     * @method static mixed dynamicWhere($method, $parameters)
     * @method static mixed whereFullText($columns, $value, array $options, $boolean)
     * @method static mixed orWhereFullText($columns, $value, array $options)
     * @method static mixed whereAll($columns, $operator, $value, $boolean)
     * @method static mixed orWhereAll($columns, $operator, $value)
     * @method static mixed whereAny($columns, $operator, $value, $boolean)
     * @method static mixed orWhereAny($columns, $operator, $value)
     * @method static mixed whereNone($columns, $operator, $value, $boolean)
     * @method static mixed orWhereNone($columns, $operator, $value)
     * @method static mixed groupBy($groups)
     * @method static mixed groupByRaw($sql, array $bindings)
     * @method static mixed having($column, $operator, $value, $boolean)
     * @method static mixed orHaving($column, $operator, $value)
     * @method static mixed havingNested(Closure $callback, $boolean)
     * @method static mixed addNestedHavingQuery($query, $boolean)
     * @method static mixed havingNull($columns, $boolean, $not)
     * @method static mixed orHavingNull($column)
     * @method static mixed havingNotNull($columns, $boolean)
     * @method static mixed orHavingNotNull($column)
     * @method static mixed havingBetween($column, iterable $values, $boolean, $not)
     * @method static mixed havingRaw($sql, array $bindings, $boolean)
     * @method static mixed orHavingRaw($sql, array $bindings)
     * @method static mixed orderBy($column, $direction)
     * @method static mixed orderByDesc($column)
     * @method static mixed latest($column)
     * @method static mixed oldest($column)
     * @method static mixed inRandomOrder($seed)
     * @method static mixed orderByRaw($sql, $bindings)
     * @method static mixed skip($value)
     * @method static mixed offset($value)
     * @method static mixed take($value)
     * @method static mixed limit($value)
     * @method static mixed groupLimit($value, $column)
     * @method static mixed forPage($page, $perPage)
     * @method static mixed forPageBeforeId($perPage, $lastId, $column)
     * @method static mixed forPageAfterId($perPage, $lastId, $column)
     * @method static mixed reorder($column, $direction)
     * @method static mixed union($query, $all)
     * @method static mixed unionAll($query)
     * @method static mixed lock($value)
     * @method static mixed lockForUpdate()
     * @method static mixed sharedLock()
     * @method static mixed beforeQuery(callable $callback)
     * @method static mixed applyBeforeQueryCallbacks()
     * @method static mixed afterQuery(Closure $callback)
     * @method static mixed applyAfterQueryCallbacks($result)
     * @method static mixed toSql()
     * @method static mixed toRawSql()
     * @method static mixed find($id, $columns)
     * @method static mixed findOr($id, $columns, Closure $callback)
     * @method static mixed value($column)
     * @method static mixed rawValue(string $expression, array $bindings)
     * @method static mixed soleValue($column)
     * @method static mixed get($columns)
     * @method static mixed paginate($perPage, $columns, $pageName, $page, $total)
     * @method static mixed simplePaginate($perPage, $columns, $pageName, $page)
     * @method static mixed cursorPaginate($perPage, $columns, $cursorName, $cursor)
     * @method static mixed getCountForPagination($columns)
     * @method static mixed cursor()
     * @method static mixed pluck($column, $key)
     * @method static mixed implode($column, $glue)
     * @method static mixed exists()
     * @method static mixed doesntExist()
     * @method static mixed existsOr(Closure $callback)
     * @method static mixed doesntExistOr(Closure $callback)
     * @method static mixed count($columns)
     * @method static mixed min($column)
     * @method static mixed max($column)
     * @method static mixed sum($column)
     * @method static mixed avg($column)
     * @method static mixed average($column)
     * @method static mixed aggregate($function, $columns)
     * @method static mixed numericAggregate($function, $columns)
     * @method static mixed insert(array $values)
     * @method static mixed insertOrIgnore(array $values)
     * @method static mixed insertGetId(array $values, $sequence)
     * @method static mixed insertUsing(array $columns, $query)
     * @method static mixed insertOrIgnoreUsing(array $columns, $query)
     * @method static mixed update(array $values)
     * @method static mixed updateFrom(array $values)
     * @method static mixed updateOrInsert(array $attributes, callable|array $values)
     * @method static mixed upsert(array $values, $uniqueBy, $update)
     * @method static mixed increment($column, $amount, array $extra)
     * @method static mixed incrementEach(array $columns, array $extra)
     * @method static mixed decrement($column, $amount, array $extra)
     * @method static mixed decrementEach(array $columns, array $extra)
     * @method static mixed delete($id)
     * @method static mixed truncate()
     * @method static mixed newQuery()
     * @method static mixed getColumns()
     * @method static mixed raw($value)
     * @method static mixed getBindings()
     * @method static mixed getRawBindings()
     * @method static mixed setBindings(array $bindings, $type)
     * @method static mixed addBinding($value, $type)
     * @method static mixed castBinding($value)
     * @method static mixed mergeBindings(self $query)
     * @method static mixed cleanBindings(array $bindings)
     * @method static mixed getConnection()
     * @method static mixed getProcessor()
     * @method static mixed getGrammar()
     * @method static mixed useWritePdo()
     * @method static mixed clone()
     * @method static mixed cloneWithout(array $properties)
     * @method static mixed cloneWithoutBindings(array $except)
     * @method static mixed dump($args)
     * @method static mixed dumpRawSql()
     * @method static mixed dd()
     * @method static mixed ddRawSql()
     * @method static mixed chunk($count, callable $callback)
     * @method static mixed chunkMap(callable $callback, $count)
     * @method static mixed each(callable $callback, $count)
     * @method static mixed chunkById($count, callable $callback, $column, $alias)
     * @method static mixed chunkByIdDesc($count, callable $callback, $column, $alias)
     * @method static mixed orderedChunkById($count, callable $callback, $column, $alias, $descending)
     * @method static mixed eachById(callable $callback, $count, $column, $alias)
     * @method static mixed lazy($chunkSize)
     * @method static mixed lazyById($chunkSize, $column, $alias)
     * @method static mixed lazyByIdDesc($chunkSize, $column, $alias)
     * @method static mixed first($columns)
     * @method static mixed firstOrFail($columns, $message)
     * @method static mixed sole($columns)
     * @method static mixed tap($callback)
     * @method static mixed when($value, callable $callback, callable $default)
     * @method static mixed unless($value, callable $callback, callable $default)
     * @method static mixed explain()
     * @method static mixed macro($name, $macro)
     * @method static mixed mixin($mixin, $replace)
     * @method static mixed hasMacro($name)
     * @method static mixed flushMacros()
     * @method static mixed macroCall($method, $parameters)
     * @mixin \Illuminate\Database\Query\Builder
     */
    class Service extends \Illuminate\Database\Eloquent\Model
    {
        //
    }

    /**
     * App\Models\User
     *
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property string|null $remember_token
     * @property hashed $password
     * @property \Illuminate\Support\Carbon|null $email_verified_at
     * @property string $email
     * @property string $name
     * @property int $id
     * @property-read \Illuminate\Database\Eloquent\Collection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
     * @property-read int|null $notifications_count
     * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|User query()
     * @method static mixed select($columns)
     * @method static mixed selectSub($query, $as)
     * @method static mixed selectRaw($expression, array $bindings)
     * @method static mixed fromSub($query, $as)
     * @method static mixed fromRaw($expression, $bindings)
     * @method static mixed addSelect($column)
     * @method static mixed distinct()
     * @method static mixed from($table, $as)
     * @method static mixed useIndex($index)
     * @method static mixed forceIndex($index)
     * @method static mixed ignoreIndex($index)
     * @method static mixed join($table, $first, $operator, $second, $type, $where)
     * @method static mixed joinWhere($table, $first, $operator, $second, $type)
     * @method static mixed joinSub($query, $as, $first, $operator, $second, $type, $where)
     * @method static mixed joinLateral($query, string $as, string $type)
     * @method static mixed leftJoinLateral($query, string $as)
     * @method static mixed leftJoin($table, $first, $operator, $second)
     * @method static mixed leftJoinWhere($table, $first, $operator, $second)
     * @method static mixed leftJoinSub($query, $as, $first, $operator, $second)
     * @method static mixed rightJoin($table, $first, $operator, $second)
     * @method static mixed rightJoinWhere($table, $first, $operator, $second)
     * @method static mixed rightJoinSub($query, $as, $first, $operator, $second)
     * @method static mixed crossJoin($table, $first, $operator, $second)
     * @method static mixed crossJoinSub($query, $as)
     * @method static mixed mergeWheres($wheres, $bindings)
     * @method static mixed where($column, $operator, $value, $boolean)
     * @method static mixed prepareValueAndOperator($value, $operator, $useDefault)
     * @method static mixed orWhere($column, $operator, $value)
     * @method static mixed whereNot($column, $operator, $value, $boolean)
     * @method static mixed orWhereNot($column, $operator, $value)
     * @method static mixed whereColumn($first, $operator, $second, $boolean)
     * @method static mixed orWhereColumn($first, $operator, $second)
     * @method static mixed whereRaw($sql, $bindings, $boolean)
     * @method static mixed orWhereRaw($sql, $bindings)
     * @method static mixed whereLike($column, $value, $caseSensitive, $boolean, $not)
     * @method static mixed orWhereLike($column, $value, $caseSensitive)
     * @method static mixed whereNotLike($column, $value, $caseSensitive, $boolean)
     * @method static mixed orWhereNotLike($column, $value, $caseSensitive)
     * @method static mixed whereIn($column, $values, $boolean, $not)
     * @method static mixed orWhereIn($column, $values)
     * @method static mixed whereNotIn($column, $values, $boolean)
     * @method static mixed orWhereNotIn($column, $values)
     * @method static mixed whereIntegerInRaw($column, $values, $boolean, $not)
     * @method static mixed orWhereIntegerInRaw($column, $values)
     * @method static mixed whereIntegerNotInRaw($column, $values, $boolean)
     * @method static mixed orWhereIntegerNotInRaw($column, $values)
     * @method static mixed whereNull($columns, $boolean, $not)
     * @method static mixed orWhereNull($column)
     * @method static mixed whereNotNull($columns, $boolean)
     * @method static mixed whereBetween($column, iterable $values, $boolean, $not)
     * @method static mixed whereBetweenColumns($column, array $values, $boolean, $not)
     * @method static mixed orWhereBetween($column, iterable $values)
     * @method static mixed orWhereBetweenColumns($column, array $values)
     * @method static mixed whereNotBetween($column, iterable $values, $boolean)
     * @method static mixed whereNotBetweenColumns($column, array $values, $boolean)
     * @method static mixed orWhereNotBetween($column, iterable $values)
     * @method static mixed orWhereNotBetweenColumns($column, array $values)
     * @method static mixed orWhereNotNull($column)
     * @method static mixed whereDate($column, $operator, $value, $boolean)
     * @method static mixed orWhereDate($column, $operator, $value)
     * @method static mixed whereTime($column, $operator, $value, $boolean)
     * @method static mixed orWhereTime($column, $operator, $value)
     * @method static mixed whereDay($column, $operator, $value, $boolean)
     * @method static mixed orWhereDay($column, $operator, $value)
     * @method static mixed whereMonth($column, $operator, $value, $boolean)
     * @method static mixed orWhereMonth($column, $operator, $value)
     * @method static mixed whereYear($column, $operator, $value, $boolean)
     * @method static mixed orWhereYear($column, $operator, $value)
     * @method static mixed whereNested(Closure $callback, $boolean)
     * @method static mixed forNestedWhere()
     * @method static mixed addNestedWhereQuery($query, $boolean)
     * @method static mixed whereExists($callback, $boolean, $not)
     * @method static mixed orWhereExists($callback, $not)
     * @method static mixed whereNotExists($callback, $boolean)
     * @method static mixed orWhereNotExists($callback)
     * @method static mixed addWhereExistsQuery(self $query, $boolean, $not)
     * @method static mixed whereRowValues($columns, $operator, $values, $boolean)
     * @method static mixed orWhereRowValues($columns, $operator, $values)
     * @method static mixed whereJsonContains($column, $value, $boolean, $not)
     * @method static mixed orWhereJsonContains($column, $value)
     * @method static mixed whereJsonDoesntContain($column, $value, $boolean)
     * @method static mixed orWhereJsonDoesntContain($column, $value)
     * @method static mixed whereJsonOverlaps($column, $value, $boolean, $not)
     * @method static mixed orWhereJsonOverlaps($column, $value)
     * @method static mixed whereJsonDoesntOverlap($column, $value, $boolean)
     * @method static mixed orWhereJsonDoesntOverlap($column, $value)
     * @method static mixed whereJsonContainsKey($column, $boolean, $not)
     * @method static mixed orWhereJsonContainsKey($column)
     * @method static mixed whereJsonDoesntContainKey($column, $boolean)
     * @method static mixed orWhereJsonDoesntContainKey($column)
     * @method static mixed whereJsonLength($column, $operator, $value, $boolean)
     * @method static mixed orWhereJsonLength($column, $operator, $value)
     * @method static mixed dynamicWhere($method, $parameters)
     * @method static mixed whereFullText($columns, $value, array $options, $boolean)
     * @method static mixed orWhereFullText($columns, $value, array $options)
     * @method static mixed whereAll($columns, $operator, $value, $boolean)
     * @method static mixed orWhereAll($columns, $operator, $value)
     * @method static mixed whereAny($columns, $operator, $value, $boolean)
     * @method static mixed orWhereAny($columns, $operator, $value)
     * @method static mixed whereNone($columns, $operator, $value, $boolean)
     * @method static mixed orWhereNone($columns, $operator, $value)
     * @method static mixed groupBy($groups)
     * @method static mixed groupByRaw($sql, array $bindings)
     * @method static mixed having($column, $operator, $value, $boolean)
     * @method static mixed orHaving($column, $operator, $value)
     * @method static mixed havingNested(Closure $callback, $boolean)
     * @method static mixed addNestedHavingQuery($query, $boolean)
     * @method static mixed havingNull($columns, $boolean, $not)
     * @method static mixed orHavingNull($column)
     * @method static mixed havingNotNull($columns, $boolean)
     * @method static mixed orHavingNotNull($column)
     * @method static mixed havingBetween($column, iterable $values, $boolean, $not)
     * @method static mixed havingRaw($sql, array $bindings, $boolean)
     * @method static mixed orHavingRaw($sql, array $bindings)
     * @method static mixed orderBy($column, $direction)
     * @method static mixed orderByDesc($column)
     * @method static mixed latest($column)
     * @method static mixed oldest($column)
     * @method static mixed inRandomOrder($seed)
     * @method static mixed orderByRaw($sql, $bindings)
     * @method static mixed skip($value)
     * @method static mixed offset($value)
     * @method static mixed take($value)
     * @method static mixed limit($value)
     * @method static mixed groupLimit($value, $column)
     * @method static mixed forPage($page, $perPage)
     * @method static mixed forPageBeforeId($perPage, $lastId, $column)
     * @method static mixed forPageAfterId($perPage, $lastId, $column)
     * @method static mixed reorder($column, $direction)
     * @method static mixed union($query, $all)
     * @method static mixed unionAll($query)
     * @method static mixed lock($value)
     * @method static mixed lockForUpdate()
     * @method static mixed sharedLock()
     * @method static mixed beforeQuery(callable $callback)
     * @method static mixed applyBeforeQueryCallbacks()
     * @method static mixed afterQuery(Closure $callback)
     * @method static mixed applyAfterQueryCallbacks($result)
     * @method static mixed toSql()
     * @method static mixed toRawSql()
     * @method static mixed find($id, $columns)
     * @method static mixed findOr($id, $columns, Closure $callback)
     * @method static mixed value($column)
     * @method static mixed rawValue(string $expression, array $bindings)
     * @method static mixed soleValue($column)
     * @method static mixed get($columns)
     * @method static mixed paginate($perPage, $columns, $pageName, $page, $total)
     * @method static mixed simplePaginate($perPage, $columns, $pageName, $page)
     * @method static mixed cursorPaginate($perPage, $columns, $cursorName, $cursor)
     * @method static mixed getCountForPagination($columns)
     * @method static mixed cursor()
     * @method static mixed pluck($column, $key)
     * @method static mixed implode($column, $glue)
     * @method static mixed exists()
     * @method static mixed doesntExist()
     * @method static mixed existsOr(Closure $callback)
     * @method static mixed doesntExistOr(Closure $callback)
     * @method static mixed count($columns)
     * @method static mixed min($column)
     * @method static mixed max($column)
     * @method static mixed sum($column)
     * @method static mixed avg($column)
     * @method static mixed average($column)
     * @method static mixed aggregate($function, $columns)
     * @method static mixed numericAggregate($function, $columns)
     * @method static mixed insert(array $values)
     * @method static mixed insertOrIgnore(array $values)
     * @method static mixed insertGetId(array $values, $sequence)
     * @method static mixed insertUsing(array $columns, $query)
     * @method static mixed insertOrIgnoreUsing(array $columns, $query)
     * @method static mixed update(array $values)
     * @method static mixed updateFrom(array $values)
     * @method static mixed updateOrInsert(array $attributes, callable|array $values)
     * @method static mixed upsert(array $values, $uniqueBy, $update)
     * @method static mixed increment($column, $amount, array $extra)
     * @method static mixed incrementEach(array $columns, array $extra)
     * @method static mixed decrement($column, $amount, array $extra)
     * @method static mixed decrementEach(array $columns, array $extra)
     * @method static mixed delete($id)
     * @method static mixed truncate()
     * @method static mixed newQuery()
     * @method static mixed getColumns()
     * @method static mixed raw($value)
     * @method static mixed getBindings()
     * @method static mixed getRawBindings()
     * @method static mixed setBindings(array $bindings, $type)
     * @method static mixed addBinding($value, $type)
     * @method static mixed castBinding($value)
     * @method static mixed mergeBindings(self $query)
     * @method static mixed cleanBindings(array $bindings)
     * @method static mixed getConnection()
     * @method static mixed getProcessor()
     * @method static mixed getGrammar()
     * @method static mixed useWritePdo()
     * @method static mixed clone()
     * @method static mixed cloneWithout(array $properties)
     * @method static mixed cloneWithoutBindings(array $except)
     * @method static mixed dump($args)
     * @method static mixed dumpRawSql()
     * @method static mixed dd()
     * @method static mixed ddRawSql()
     * @method static mixed chunk($count, callable $callback)
     * @method static mixed chunkMap(callable $callback, $count)
     * @method static mixed each(callable $callback, $count)
     * @method static mixed chunkById($count, callable $callback, $column, $alias)
     * @method static mixed chunkByIdDesc($count, callable $callback, $column, $alias)
     * @method static mixed orderedChunkById($count, callable $callback, $column, $alias, $descending)
     * @method static mixed eachById(callable $callback, $count, $column, $alias)
     * @method static mixed lazy($chunkSize)
     * @method static mixed lazyById($chunkSize, $column, $alias)
     * @method static mixed lazyByIdDesc($chunkSize, $column, $alias)
     * @method static mixed first($columns)
     * @method static mixed firstOrFail($columns, $message)
     * @method static mixed sole($columns)
     * @method static mixed tap($callback)
     * @method static mixed when($value, callable $callback, callable $default)
     * @method static mixed unless($value, callable $callback, callable $default)
     * @method static mixed explain()
     * @method static mixed macro($name, $macro)
     * @method static mixed mixin($mixin, $replace)
     * @method static mixed hasMacro($name)
     * @method static mixed flushMacros()
     * @method static mixed macroCall($method, $parameters)
     * @mixin \Illuminate\Database\Query\Builder
     */
    class User extends \Illuminate\Database\Eloquent\Model
    {
        //
    }

}