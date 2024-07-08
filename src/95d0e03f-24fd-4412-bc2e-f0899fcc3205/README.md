```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Parser (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Power**
> extends: ****
```uml
@startuml
class Parser << (F,LightGreen) >> #RoyalBlue {
  + code(string $code) : array
  + getClassCode(string $code) : ?string
  + getClassLicense(string $code) : ?string
  + getUseStatements(string $code) : ?array
  + getTraits(string $code) : ?array
  - properties(string $code) : ?array
  - methods(string $code) : ?array
  - extractDocBlock(string $code, string $declaration) : ?string
  - extractMethodBody(string $code, int $startPos) : ?string
  - extractFunctionArgumentDetails(?string $comment, ?string $arguments) : ?array
  - extractReturnType(?string $returnType, ?string $comment) : ?string
  - extractArgTypesFromComment(string $comment) : ?array
  - extractArgTypesArguments(?string $arguments) : ?array
  - extractReturnTypeFromComment(string $comment) : ?string
  - extractSinceVersion(?string $comment) : ?string
  - extractDeprecatedVersion(?string $comment) : ?string
  - removeWhiteSpaceFromComment(string $comment) : string
  - mergeArgumentTypes(array $argTypesFromDeclaration, ?array $argTypesFromComments) : array
}

note right of Parser::code
  Get properties and method declarations and other details from the given code.

  since: 3.2.0
  return: array
end note

note left of Parser::getClassCode
  Get the class body

  since: 3.2.0
  return: ?string
end note

note right of Parser::getClassLicense
  Get the class license

  since: 3.2.0
  return: ?string
end note

note left of Parser::getUseStatements
  Extracts the first consecutive `use` statements from the given PHP class.

  since: 3.2.0
  return: ?array
end note

note right of Parser::getTraits
  Extracts trait use statements from the given code.

  since: 3.2.0
  return: ?array
end note

note left of Parser::properties
  Extracts properties declarations and other details from the given code.

  since: 3.2.0
  return: ?array
end note

note right of Parser::methods
  Extracts method declarations and other details from the given code.

  since: 3.2.0
  return: ?array
end note

note left of Parser::extractDocBlock
  Extracts the PHPDoc block for a given function declaration.

  since: 3.2.0
  return: ?string
end note

note right of Parser::extractMethodBody
  Extracts method body based on starting position of method declaration.

  since: 3.2.0
  return: ?string
end note

note left of Parser::extractFunctionArgumentDetails
  Extracts the function argument details.

  since: 3.2.0
  return: ?array
end note

note right of Parser::extractReturnType
  Extracts the function return type.

  since: 3.2.0
  return: ?string
end note

note left of Parser::extractArgTypesFromComment
  Extracts argument types from a given comment.

  since: 3.2.0
  return: ?array
end note

note right of Parser::extractArgTypesArguments
  Extracts argument types from a given declaration.

  since: 3.2.0
  return: ?array
end note

note left of Parser::extractReturnTypeFromComment
  Extracts return type from a given declaration.

  since: 3.2.0
  return: ?string
end note

note right of Parser::extractSinceVersion
  Extracts the version number from the @since tag in the given comment.

  since: 3.2.0
  return: ?string
end note

note left of Parser::extractDeprecatedVersion
  Extracts the version number from the deprecated tag in the given comment.

  since: 3.2.0
  return: ?string
end note

note right of Parser::removeWhiteSpaceFromComment
  Remove all white space from each line of the comment

  since: 3.2.0
  return: string
end note

note left of Parser::mergeArgumentTypes
  Merges the types from the comments and the arguments.

  since: 3.2.0
  return: array
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

