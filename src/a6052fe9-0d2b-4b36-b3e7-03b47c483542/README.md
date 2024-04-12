```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Injector (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\JoomlaPower**
> extends: **Injector**
```uml
@startuml
class Injector << (F,LightGreen) >> #RoyalBlue {
  # update(array $guids, string $code) : string
  # inspect(object $power, ?array $useStatements, ...) : ?string
  # buildNamespaceStatment(object $power) : string
  # extractUseStatements(string $useStatement, string $className, ...) : array
  # isUseStatementEqual(string $useStatement, string $namespaceStatement) : bool
  # extractClassNameOrAlias(string $useStatement) : ?string
  # getUniqueName(string $name, object $power) : string
  # extractLastNameFromNamespace(string $namespace) : ?string
  # removeLastNameFromNamespace(string $namespace) : string
  # shouldAddTraitStatement(object $power) : bool
  # handleTraitLogic(string $name, object $power, ...) : void
  # addUseStatement(string $name, string $className, ...) : void
  # addUseStatements(string $code, ?array $useStatements) : string
  # addLines(string $code, string $lines) : string
  # addLinesAfterDefinedLine(string $code, string $lines) : string
}

note right of Injector::update
  Update the code

  since: 3.2.0
  return: string
end note

note left of Injector::inspect
  Inspect the super power to determine the necessary class name based on use statements and traits.
It checks if the given power (class, trait, etc.) already has a corresponding use statement
and handles the naming accordingly to avoid conflicts.

  since: 3.2.0
  return: ?string
  
  arguments:
    object $power
    ?array $useStatements
    ?array $traits
end note

note right of Injector::buildNamespaceStatment
  Builds the namespace statement from the power object's namespace and class name.

  since: 3.2.0
  return: string
end note

note left of Injector::extractUseStatements
  Extracts and processes use statements to find if the current class name is already used.
It identifies any potential naming conflicts.

  since: 3.2.0
  return: array
  
  arguments:
    string $useStatement
    string $className
    ?array $useStatements
end note

note right of Injector::isUseStatementEqual
  Checks if the namespace statement is already declared in the current use statements.
This method uses a regular expression to check for an exact match of the full statement,
taking into account the possibility of an alias being used.

  return: bool
end note

note left of Injector::extractClassNameOrAlias
  Extracts the class name or alias from a use statement.
This method parses a PHP 'use' statement and extracts either the class name or its alias.
If the statement doesn't match the expected format, or if no class name or alias is found,
the method returns null.
Example:
- 'use Namespace\ClassName;' -> returns 'ClassName'
- 'use Namespace\ClassName as Alias;' -> returns 'Alias'

  since: 3.2.0
  return: ?string
end note

note right of Injector::getUniqueName
  Ensures the name for the use statement is unique, avoiding conflicts with other classes.

  since: 3.2.0
  return: string
end note

note left of Injector::extractLastNameFromNamespace
  Extracts the last part of a namespace string, which is typically the class name.

  since: 3.2.0
  return: ?string
end note

note right of Injector::removeLastNameFromNamespace
  Removes the last name from the namespace.

  since: 3.2.0
  return: string
end note

note left of Injector::shouldAddTraitStatement
  Determines whether a trait statement should be added.

  since: 3.2.0
  return: bool
end note

note right of Injector::handleTraitLogic
  Handles specific logic for traits, such as checking if the trait is already used.

  since: 3.2.0
  return: void
  
  arguments:
    string $name
    object $power
    ?array $traits
end note

note left of Injector::addUseStatement
  Adds a use statement to the class if it's not already present.

  since: 3.2.0
  return: void
  
  arguments:
    string $name
    string $className
    string $namespaceStatement
end note

note right of Injector::addUseStatements
  Insert a line before the class declaration in the given class code.

  since: 3.2.0
  return: string
end note

note left of Injector::addLines
  Insert a line before the class declaration in the given class code.

  since: 3.2.0
  return: string
end note

note right of Injector::addLinesAfterDefinedLine
  Inserts a new line after the defined('_JEXEC') line.

  since: 3.2.0
  return: string
end note
 
@enduml
```

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

