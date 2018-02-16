/**
 * Downlevels a .js file from ES2015 to ES5. Internally, uses `tsc`.
 *
 * @param inputFile
 * @param outputFile
 */
export declare function downlevelWithTsc(inputFile: string, outputFile: string): Promise<void>;
